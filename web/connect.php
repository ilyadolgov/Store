<?php
// подключение к бд
$servername = 'localhost';
$username = 'root';
$password = 'adminsql123';
$dbname = 'allfortelldb';

$conn =  mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die("Connection Failed :" .mysqli_connect_error());
}else {
	  
	}
?>


<!-- основа ДБ-->
