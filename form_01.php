<?php
	//lucas baneke GD1A
	$firstName = $_GET['firstName'];
	$lastName = $_GET['lastName'];
	$age = $_GET['age'];
	$email = $_GET['email'];
	echo "<h2>Response Demo Form</h2><h3> ";
	echo "You submitted the following information<br><ul>";
	echo "<li>Name: <strong> $firstName $lastName</strong></li>";
	echo "<li>Age: $age</li>";
	echo "<li>Age: $email</li>";
	echo "</li></ul></h3>";
?>
