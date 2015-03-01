<?php

	$time_start = microtime(true);

	$num = array();
	$size = 10000;

	for ($i=0; $i < $size; $i++) { 
	 	array_push($num, rand(1,1000));
	 }

	 for ($i=0; $i < $size; $i++) { 
	 	$min = $num[$i];
	 	$index = $i;

	 	for ($j=$i; $j < $size; $j++) { 
	 		if($num[$j] < $min)	{
	 			$min = $num[$j];
	 			$index = $j;
	 		}
	 	}

	 	$temp = $num[$i];
	 	$num[$i] = $num[$index];
	 	$num[$index] = $temp;

	 }

	 $time_stop = microtime(true);

	 var_dump($time_stop - $time_start);

	 // Returns 27.54 s for 10000 elements
	 
?>