<?php

$servername = "localhost";
$dbname = "accs";
$username = "root";
$password = "";

$connection = new mysqli($servername, $username,$password,$dbname);
if ($connection->connect_error) { die("connection error : " . $connection->connect_error);}

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM accounts WHERE (email = '$email' OR username = '$email') AND password='$password'";
$result = $connection->query($sql);
if (mysqli_num_rows($result)== 1) {
	$logged = true;
} else {
	$logged = false;
}
if ($logged) {
	echo 'Logged In';
} else {
	echo 'Email or Password is incorrect';
}

?>
