<?php

//Create an array that contains all the odd numbers between 1 to 20,000.
//Use the var_dump() at the end to display the array values without using loops.

$array_variable = array();

for($i = 1; $i < 20000; $i+=2) {
	$array_variable[] = $i;
}

var_dump($array_variable);

?>
