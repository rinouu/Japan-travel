<?php
	$uservalue = 10;
	function is_multiple_of_3_or_5($number) {
		if ($number%3 == 0) {
			return true;
		}
		elseif ($number%5 == 0) {
			return true;
		}
		else {
			return flase;
		}
	}
	echo $uservalue;
	for ($i=$uservalue; $i<= 100; $i++) {
		if (is_multiple_of_3_or_5(i)==true) {
			echo $i;
			echo "\n";
		}
	}
?>