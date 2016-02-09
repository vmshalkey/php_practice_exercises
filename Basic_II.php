<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- You have an array called $states that has the following information:

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

Display a dropdown menu in HTML (using select tag and option tag) that displays the different states. 
Create this dropdown menu using for loops. 
Create another identical dropdown menu but, this time, use foreach statement.

Once you're done with above exercise, insert three new states in the array $states: 
'NJ', 'NY', 'DE'. 
Display a new dropdown menu with the eight (8) states.

Your output should have three dropdown menus. -->
	<h1>For Loop</h1>
		<select>
			<?php
				$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
				for ($i = 0; $i < count($states); $i++) {
					echo '<option value="' . $states[$i] . '">' . $states[$i] . '</option>';
				}
			?>
		</select>
	<h1>Foreach Statement</h1>
		<select>
			<?php
				$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
				foreach ($states as $state) {
					echo '<option value="' . $state . '">' . $state . '</option>';
				}
			?>
		</select>
	<h1>New Menu (8 States)</h1>
		<select>
			<?php
				$states = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');
				foreach ($states as $state) {
					echo '<option value="' . $state . '">' . $state . '</option>';
				}
			?>
		</select>
</body>
<html>