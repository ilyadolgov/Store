<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>All4Tell</title>
		<link rel = "stylesheet" type = "text/css" href = "styles.css"/>
		<link rel="icon" href="favicon.ico" type = "image/vnd.microsoft.icon">
    </head>
	
	<body 
	
		<div id="maintable">
			<table>
				<tr>
				
					<td colspan = 3 id="headline">
						<!-- <img src = "./img/logo.png"-->
						<ul class="nav">
							<li><a href="index.php">Главная</a></li>
							<li><a href="adddel.php">Управление</a></li>
						</ul>
					</td>
					</tr>
					<tr>
					<td>
					<div  id="ugolkrug"> </div>
			<form  id = "prod" method="post" action="dobav.php">
				<p><input name="filename" type="file" /></p>
				<input type="text" name="name" class="addpublic" placeholder="Наименование товара"/>
				<p><input type = "text" name = "price" class="addpublic" placeholder = "Цена товара"/></p>
				<p> <input type="submit" value="Добавить" /> </p>
			</form>
			
			<?phpif(isset($_POST['button'])) {

    $uploaddir = 'img';
    $uploadfile = $uploaddir . basename($_FILES['file']['namef']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        
        $file= $_FILES['file']['namef'];

      } else {
         echo "Ошибка загрузки";
      }
	  ?>
			
			</td>
			</tr>
				<tr>
					<td colspan = "3"> <div id = "space"> </div> </td>
				</tr>
			</table>
		</div>
	</body>
</html>

