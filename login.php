<?php 
include 'log.php';
session_start();
$email = clearInput($_POST['email']);
$sql = "SELECT id, email,  password, username, surname FROM tab
		WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		if ($_POST['password'] != $row['password']) {
			$_SESSION['error']['message'][] = 'The password or email doesn\'t match';
			header('Location: index.php');
		// } else {
		// 	$_SESSION['user'] = $row;
		// 	header('Location: index.php');


		} else {
			$_SESSION['user'] = $row;
			$_SESSION['message']['succes'][] = 'Welcome you a log';
			header('Location: start2.php');
}
	}
} else {
	$_SESSION['error']['message'][] = 'This email doesn\'t exist';
	header('Location: index.php');
}
 ?>