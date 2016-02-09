
<!DOCTYPE HTML>
<html>
<head>
<title>Checkers</title>
	<style>
		#red {
			height: 100px;
			width: 100px;
			display:inline-block;
			background-color: red;
			margin: -2px;
		}
		#black {
			height: 100px;
			width: 100px;
			background-color: black;
			display: inline-block;
			margin: -2px;
		}
		#container {
			width: 805px;
			height: 805px;
		}
	</style>
</head>
<body>
	<div id="container">
<?php
	for ($down = 0; $down < 4; $down++){
		for ($across = 0; $across < 4; $across++){
		echo '<div id="red"></div><div id="black"></div>';
		}
		for ($across = 0; $across < 4; $across++){
		echo '<div id="black"></div><div id="red"></div>';
		}
	}
?>
	</div>
</body>
</html>








