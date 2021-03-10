<?php

echo teste(11);

function teste ($numero){
	
	$dividor3 	= 0;
	$divisor5	= 0;
	for($i=1;$i<$numero;$i++){

		$temp = fmod($i, 3);
		if ($temp==0){
			$dividor3 += $i;
		}
		
		$temp = fmod($i, 5);
		if ($temp==0){
			$divisor5 += $i;
		}
		

	}
	
	return ($dividor3 + $divisor5);
}

?>
