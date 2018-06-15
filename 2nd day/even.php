<?php

$nums = [1,3,5,6,9,11,15,30];
$newarr = [];
$cnt = 0;
foreach ($nums as $key => $value){
   if (isEven($value)){
       $newarr[$cnt] = $value;
       $cnt++;
   }
}

function isEven($number) {
	return $number % 2 == 0;
}

var_dump($newarr);
?>