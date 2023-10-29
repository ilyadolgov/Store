<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Registration </title>
		<link rel = "stylesheet" type = "text/css" href = "styles.css"/>
		<link rel="icon" href="favicon.ico" type = "image/vnd.microsoft.icon">
	</head>
	<?php require_once('connect.php'); ?>
		<body id= "body2">
		
			<table>
				<tr>
					<td id = "upstr">
					<ul class="nav">
							<li><a href="./index.php">Главная</a></li>
							<li><a href="./registration.php">Регистрация</a></li>
							<li><a href="./login.php">Вход</a></li>
					</ul>
					</td> 
				</tr>
			</table>
			<div id="box">
			<div id = "boxinbox">
			
				<div  id="ugolkrug"> </div>
				<form id = "reg" action="reg.php" method="post">
					<h1 id = "avtorization"> РЕГИСТРАЦИЯ</h1>
					<input id="name" type="text" required name="login" placeholder="Введите логин" size="20" pattern = "^[A-Za-z0-9]+$"/> 
					<p> <input type="password" required name="password" minlength = "8" placeholder="Введите пароль" size="20" maxlength="16" pattern="^[A-Za-z0-9]+$"/> </p>
					<p> <input id="name" type="text" required  name="username" placeholder="Введите имя" size="20" pattern = "^[А-Яа-яЁё\s]+$"/> 
					<p> <input id="surname" type="text" required name="surname" placeholder="Введите фамилию" size="20" pattern = "^[А-Яа-яЁё\s]+$"/> 
					<p> <input id="email" type="text" name="email" placeholder="Введите email" size="20" />
					<p> <input type="submit" value="Регистрация" /> </p>
			
				</form>
			</div>		 
		</div>
	</body>
</html>