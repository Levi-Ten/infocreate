<?php 
include 'log.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){ 	
	
		$data['email'] = clearInput($_POST['email']);
		$data['password'] = clearInput($_POST['password']);
		$data['username'] = clearInput($_POST['username']);
		$data['surname'] = clearInput($_POST['surname']);

		$result = createUsers($conn, $data);
	
		if ($result) {
			$_SESSION['user'] = getCreatedUser(getConn());
			$_SESSION['success']['message'][] = "User was created successfuly";
			header('Location: index.php');
		}
}
 ?>