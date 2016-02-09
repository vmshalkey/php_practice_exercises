<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- Create a function called 'print_lists' that takes any array and prints each value in the array in <li>. 
For example, running print_lists($A) where $A = array(2,3,'hello'); should output a html response that looks like

<ul>
<li>2</li>
<li>3</li>
<li>hello</li>
</ul> -->

	<ul>
		<?php

		function print_lists ($arr) {
			for($i = 0; $i < count($arr); $i++) {
				echo '<li>' . $arr[$i] . '</li>';
			}

		}

		$A = array(2,3,'hello');
		print_lists($A);

		?>
	</ul>
</body>
<html>