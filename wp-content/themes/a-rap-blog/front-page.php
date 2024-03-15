<?php 

ini_set('display_errors','1');
error_reporting(E_ALL);
echo '<h1>This site is currently under construction</h1>';
$rawData = file_get_contents('php://input');

echo $rawData;
// if($rawData){
// 	echo "Client Name: " . $rawData['client_name'] . "<br>";
//    echo "Client Address: " . $rawData['client_address'];
// } else {
//     echo "No data received";
//   }