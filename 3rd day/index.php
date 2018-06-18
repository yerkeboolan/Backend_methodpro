<?php

$a = $_GET['Name'];
$b = $_GET['Surname'];
$c = $_GET['Age'];
$d = $_GET['Gender'];
$e = $_GET['Country'];

$result = $a+$b+$c;
var_dump($result);




?>

<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<form method = "POST action = "index.php">
		<input type="text" name="Name">
		<input type="text" name="Surname">
		<input type="text" name="Age"> 
		<input type="text" name="Gender">
		<input type="text" name="Country">
		<input type="submit" name="submit" value = "Submit" />
	</form>
</body>
</html>