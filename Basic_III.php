<!DOCTYPE html>
<html>
<head>
	<title>Coin Throw</title>
</head>
<body>
<!-- You're going to create a program that simulates throwing a coin 5,000 times. 
Your program should display how many times the head/tail appears.

Sample output should be like the following: 

Starting the program
Attempt #1: Throwing a coin... It's a head! ... Got 1 head(s) so far and 0 tail(s) so far
Attempt #2: Throwing a coin... It's a head! ... Got 2 head(s) so far and 0 tail(s) so far
Attempt #3: Throwing a coin... It's a tail! ... Got 2 head(s) so far and 1 tail(s) so far
Attempt #4: Throwing a coin... It's a head! ... Got 3 head(s) so far and 1 tail(s) so far
........
Attempt #5000: Throwing a coin... It's a head! ... Got 2412 head(s) so far and 2588 tail(s) so far
Ending the program - thank you!-->
			<?php
				echo "<h1>Starting the program</h1>";

				$coin_side = "";
				$heads = 0;
				$tails = 0;

				for ($attempt = 1; $attempt <=5000; $attempt++) {
						$coin_flip = rand(0,1);
					if($coin_flip == 0) {
						$coin_side = "head";
						$heads = $heads + 1;
					} else if ($coin_flip == 1) {
						$coin_side = "tail";
						$tails = $tails + 1;
					}
					echo "Attempt #" . $attempt . ": Throwing a coin... It's a " . $coin_side . 
					"! ... Got " . $heads . " head(s) so far and " . $tails . " tails(s) so far<br>";
				}
				echo "<h1>Ending the program - thank you!</h1>";
			?>
</body>
<html>