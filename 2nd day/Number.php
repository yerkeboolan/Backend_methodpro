<?php

function inNumberInRange($num) {
	$a = 5;

	if($a > 0 && $a < 10) {
		return 'true';
	}	else {
		return 'false';
	}

}

echo 'TorF: '.inNumberInRange($a);

?>