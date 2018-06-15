<?php

$nums = [1,3,5,6,9,11,15,30];
$newarr = [];
$cnt = 0;
foreach ($nums as $key => $value){
   if (isNumberInRange($value)){
       $newarr[$cnt] = $value;
       $cnt++;
   }
}

var_dump($newarr);

function isNumberInRange($numbers) {
	return $numbers > 0 && $numbers < 10;
}
 
?>

