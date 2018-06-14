<?php

$name = 'Yerkebulan';
$surname = 'Zhumagali';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Script</title>
</head>
<body>
 <?php
 	$string ='SUM=';
 	$arr = ['Michael' => 1000, 'John' => 500, 'Steven' =>200];
 	var_dump($arr['Michael'],$arr['John']);
 	echo $string;
 	echo array_sum($arr);
 	 ?>
</body>
</html>