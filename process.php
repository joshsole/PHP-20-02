<?php

require 'config.php';
//process the form here

//adding a function
// function myCompanyMotto(){
// echo "<br /> we delver quantity, not quality!<br />";
// }

$quantity = $_POST['qty'];
$item = $_POST['item'];

echo "You ordered ". $quantity . " " . $item . ".<br />";
echo "Thank you for ordering from ATC Art Supplies!";

//funtion output
echo myCompanyMotto();

