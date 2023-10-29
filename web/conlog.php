<?php
require_once('connect.php');

	$login = $_POST['login'];
	$password = $_POST['password'];

if(empty($login) || empty($password))
{
		echo "Заполните все поля";
} else {
		$sql = "SELECT * FROM `users` WHERE login = '$login' AND password ='$password'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc()){
				
				echo "Вы вошли как: " .$row['login'];
				echo    require_once 'index.php';				
			}
		} else {
				require_once('login.php');
				echo "Неверный логин или пароль";		
		}
}
?>
