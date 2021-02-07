<?php 
$database = 'name';
$servername = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
		die('Conection failed' . mysqli_connect_error());
	}

	function getConn()
	{
		$database = 'name';
		$servername = 'localhost';
		$username = 'root';
		$password = '';

		$conn = mysqli_connect($servername, $username, $password, $database);
		$conn = mysqli_connect($servername, $username, $password, $database);
		if (!$conn) {
			die('Conection failed' . mysqli_connect_error());
	}

		return $conn;  
	}
 
	function clearInput($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


	function escapeData($conn, $data)
{
  $cleanData = [];
  foreach ($data as $key => $value) {
    $cleanData[$key] = mysqli_escape_string($conn, $value);
 
  }
  
  return $cleanData;
}



		function createUsers($conn, $data)
{
	$data = escapeData($conn, $data);
	extract($data);
	
	 $sql = "INSERT INTO tab (email, password, username, surname) 
          VALUES('$email', '$password', '$username', '$surname');";
// var_dump($username); die();
	  if ($conn->query($sql) === TRUE) {
echo "ok";
	  	  $response = TRUE;
	      $message = "Created new users";
	      if (isset($_SESSION['message']['success'])) {
	      	unset($_SESSION['message']['success']);
	      		
	      }
	      $_SESSION['message']['success'][] = $message;
	  } else {
	  	  $response = FALSE;
	  	  echo "sorry";

	      $_SESSION['message']['error'][] = "Error: " . $sql . "<br>" . $conn->error;
	     // var_dump($conn->error); die();
	  }

	  $conn->close();

	  return $response;
}
// }
function getCreatedUser($conn) {
	$sql = 'SELECT id, email, password, username, surname FROM tab
			ORDER BY id DESC
			LIMIT 1';


	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$users = $result->fetch_assoc();
	} else {
		die('User not found');
	}
	$conn->close();
	return $users;	

}
?>
