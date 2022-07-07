<?php

$servername = "localhost";
$dbname = "accs";
$username = "root";
$password = "";

$connection = new mysqli($servername, $username,$password,$dbname);
if ($connection->connect_error) { die("connection error : " . $connection->connect_error);}

$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "INSERT INTO accounts(username,email,password) VALUES('$username','$email','$password')";
$results = $connection->query($sql);
header("Location: log.html")
  ?>