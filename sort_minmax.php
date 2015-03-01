<?php

	$time_start = microtime(true);

	$num = array();
	$size = 10000;
	$replace_max = $size-1;

	for ($i=0; $i < $size; $i++) { 
	 	array_push($num, rand(1,10000));
	 }

	 for ($i=0; $i <= $replace_max; $i++) { 

	 	$min = $num[$i];
	 	$max = $num[$i];
	 	$index_min = $i;
	 	$index_max = $i;

	 	for ($j=$i; $j <= $replace_max; $j++) { 
	 		if($num[$j] < $min)	{
	 			$min = $num[$j];
	 			$index_min = $j;
	 		}

	 		if($num[$j] > $max)	{
	 			$max = $num[$j];
	 			$index_max = $j;
	 		}
	 	}

	 	$temp = $num[$i];
	 	$num[$i] = $min;
	 	$num[$index_min] = $temp;

	 	if ($index_max == $i) $index_max = $index_min;
	 	$temp = $num[$replace_max];
	 	$num[$replace_max] = $max;
	 	$num[$index_max] = $temp;
	 	$replace_max--;

	 }

	 $time_stop = microtime(true);
	 var_dump($time_stop - $time_start);
	 // Takes 20.61s for 10000 entries
?>