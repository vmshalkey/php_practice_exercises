<?php

//Create a program that prints the sum of all the values in the array "A". 
//Array "A" should have the following values: [1, 2, 5, 10, 255, 3].

$arrayA = array(1, 2, 5, 10, 255, 3);
$sum = 0;

for($i = 0; $i < count($arrayA); $i++) {
	$sum = $sum + $arrayA[$i] . '<br>';
}

echo $sum;

?>