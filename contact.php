<!DOCTYPE html>
<html>
<head>
	<title>PHP - Contact</title>
</head>
<body>

	<?php
	include 'navigation.php';
	?>

	<br>

	<h2>Atc Art Supply Order Form</h2>
	
	<form action="process.php" method="post"> 
		<select name="item"> 
			<option>Paint</option>
			<option>Brushes</option>
			<option>Erasers</option>
		</select>
		Quantity: <input type="text" name="qty" /> 
		<input type="submit" />
	</form>



</body>
</html>