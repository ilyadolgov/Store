<?php
require_once('connect.php');
$username = $_POST['username'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql =  "INSERT INTO users (username, surname, login, password, email) VALUES('$username', '$surname', '$login', '$password', '$email')";

$conn -> query($sql);	
echo "Добро пожаловать <b>".$login;
require_once('index.php');
?>




