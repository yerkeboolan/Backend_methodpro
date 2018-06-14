<?php

$name = 'Yerkebulan';
$surname = 'Zhumagali';

/*$array = [
	0 => '1';
	1 => '2';
	2 => '3';
	3 => '4';
];

foreach($array as $key => value) {
	if($ key == 2) {
		var_dump($value);
	}
} */

/*$var = 'Hello world';
$var = 25;
$var = ['1', '2', '3'];

define('TESTVAR', 123);

//echo $var

//var_dump($var);

echo(TESTVAR);

$color = 'red'; */
/*if($color == 'green') {
	echo 'Green color';
}	else {
	echo 'Not green color';
} */

/* switch () {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
} */

/*$var = 1;
while ($i <= 10){
	echo $i;
	$var++;
} */

?>

<!DOCTYPE html>
<html>
<head>
	<title>Test script</title>
</head>
<body>
	<?=$name?>
	<?=$surname?>
	<?php
		if($name == 'Yerkebulan')
			echo 'name is Yerkebulan';
		else 
			echo 'name not Yerkebulan';
	 ?>
</body>
</html>