<!DOCTYPE html>
<html>
<head>
	<title>Get Min and Max</title>
</head>
<body>
<!-- Create a function get_max_and_min() that takes an array of numbers and, 
then, returns both the minimum and the maximum number from the given array as an associative array. 
Do not use the PHP function max() or min() to get this to work. 
See if you can do this using arrays and for loops.

For example:

$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
$output = get_max_and_min($sample); 
var_dump($output); 
//$output should be equal to array('max' => 332, 'min' => 1.02);-->

	<?php

	function get_max_and_min($arr) {
		$min = $arr[0];
		$max = $arr[0];

		for($i = 0; $i < count($arr); $i++) {
			if($min > $arr[$i]) {
				$min = $arr[$i];
			}
			if($max < $arr[$i]) {
				$max = $arr[$i];
			}
		}
		$min_max = array('min' => $min, 'max' => $max);
		return $min_max;
	}
	$sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
	$output = get_max_and_min($sample);
	var_dump($output);
			

	?>
</body>
<html>