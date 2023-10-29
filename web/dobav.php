<?php 
require_once('connect.php');
if (isset($_POST["name"]) && isset($_POST["price"])) {	
			
	$filename = $conn->real_escape_string($_POST["filename"]);	
	$name = $conn->real_escape_string($_POST["name"]);
	$price = $conn->real_escape_string($_POST["price"]);
	$sql = "INSERT INTO products(filename,name, price) VALUES ('$filename', '$name', '$price')";
}
	if($conn ->query($sql)) {
	require_once('index.php');
		
	} else {
		echo "Error: " . $conn->error;
			}
?>