<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>All4Tell</title>
		<link rel = "stylesheet" type = "text/css" href = "styles.css"/>
		<link rel="icon" href="favicon.ico" type = "image/vnd.microsoft.icon">
    </head>
	<div> <!-- id="index"-->
	<body>
		<!--
		<div id="maintable">-->
			<div id="mainline"> </div>
			<table>	
				<tr>
					<td colspan = 3 id="headline">
						<ul class="nav">
						<li><a href="/web">Главная</a></li>
						<li> <a href='login.php'>Войти</a></li>
						<li><a href='./adddel.php'>Корзина</a></li>	
						<li><a href="add.php">Добавление</a></li>						
						</ul>
					</td>
				</tr>
</table>				
<?php
require_once('connect.php');
$sql = "SELECT * FROM products";
if($result = $conn -> query($sql)) {
	foreach($result as $row){
		echo"<table>", "<tr>";
			echo "<td>"<img src="web/img/[]" alt="Изображение"> . $row["filename"] . "<br>"; 
			echo $row["name"]. "<br>";
			echo $row["price"];
			echo "<form action='delete.php' method='post'>
					<input type='hidden' name='id' value='" . $row["id"] . "' />
					<input type='submit' value='Удалить'>
					</form> </td>";
			echo "</tr>";
	}
	echo "</table>";
	$result -> free();

	}else{
		echo "ошибка: " . $conn ->error;
			
		}

$conn->close();
?>
		<!--/div>-->
	</body>
	</div>
</html>


			
			