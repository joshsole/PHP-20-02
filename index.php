<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP | <?= $page?></title>
</head>
<body>

<?php
include 'navigation.php';


if($name == 'Gino') 
{
	echo 'Hello Sir ' . $name . '!';
}

elseif ($name == 'Josh')
echo 'good morning';

else
{
echo 'Welcome!';
}

//adding a class

echo '<h2 class="heading1">Hi my name is ' . $name . '</h2>';


// echo "Traveling to $destination<br />";
// switch ($destination)
// {
// 	case "Las Vegas":
// 		echo "Bring an extra $500";
// 		break;
// case "Amsterdam":
// case 'Auckland':
// 		echo "Bring an open mind";
// 		break;	
// 	case "Egypt":
// 		echo "Bring 15 bottles of SPF 50 Sunscreen";
// 		break;	
// 	case "Tokyo":
// 		echo "Bring lots of money";
// 		break;
// 	case "Caribbean Islands":
// 		echo "Bring a swimsuit";
// 		break;	

// 		default:
// 		echo "Bring Lots of Undies";
// 		break;
// }

// if($page == 'Home'):
// 	?>
 	<!-- This is <em> HTML</em> -->
 	<?php
// 	endif;


?>


</body>
</html>