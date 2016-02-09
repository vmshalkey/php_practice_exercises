<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- Let's create a new array called $users that have the following keys and values

$users['first_name'] = "Michael";
$users['last_name'] = "Choi";

Create a function where you can pass this $users and which would print an output that looks like below

There are 2 keys in this array: first_name, last_name
The value in the key 'first_name' is 'Michael'.
The value in the key 'last_name' is 'Choi'. -->


<?php

function print_users ($arr) {

	echo 'There are ' . count($arr) . ' keys in this array: ';

	foreach($arr as $key => $value) {
		echo "'" . $key . "' ";
	}

	echo '<br>';

	foreach($arr as $key => $value) {
		echo "The value in the key '" . $key . "' is '" . $value . "'." . '<br>';
	}
}
$users = array('first_name' => 'Michael', 'last_name' => 'Choi');
print_users($users);

?>
</body>
<html>