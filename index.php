<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>

<?php
include 'navigation.php';

if($name == 'Gino') 
{
	echo 'Your name is ' . $name . '!';
}
else
{
echo 'Your name is not ' . $name . '!';
}

//adding a class

// echo '<h2 class="heading1">Hi my name is ' . $name . '</h2>';

?>


</body>
</html>