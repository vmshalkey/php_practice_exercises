<!DOCTYPE html>
<html>
<head>
	<title>Draw Stars</title>
</head>
<body>
<!-- Create a function called draw_stars() that takes 
an array of numbers and echo out  *.

For example:

$x = array(4, 6, 1, 3, 5, 7, 25);
draw_stars(x) should print the following on the screen/browser:

**** 
****** 
* 
*** 
***** 
******* 
*************************
-->

 	<?php
	// 	function draw_stars($arr){

	// 		for($i = 0; $i < count($arr); $i++) {
	// 			for($star = 0; $star < $arr[$i]; $star++) {
	// 				echo "*";
	// 			}
	// 			echo "<br>";
	// 		}
	// 	}
	// $x = array(4, 6, 1, 3, 5, 7, 25);
	// draw_stars($x);
	?>

<!-- Modify the function above. 
Allow an array, that contains integers and strings, 
to be passed to the draw_stars() function. 
When a string is passed, instead of  displaying *, 
display the first letter of the string according to the example below.

For example:

 $x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
draw_stars($x) should print the following on the screen/browser:
$x[$i][0] = t
**** 
ttt 
* 
mmmmmmm 
***** 
******* 
jjjjjjjjjjj
-->

	<?php
		function draw_stars($arr){

			foreach ($arr as $value) {
				if(is_numeric($value)) {
						echo str_repeat("*", $value). "<br>";
				} else {
					$letter = strtolower(substr($value, 0, 1));
					$letter_count = strlen($value);
						echo str_repeat($letter, $letter_count) . "<br>";
					}
				}
			}
		$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
		draw_stars($x);
	?>






</body>
<html>