<?php 

ini_set('display_errors','1');
error_reporting(E_ALL);
echo '<h1>This site is currently under construction</h1>';
// Access data from POST request
$clientName = $_POST['client_name'];
$clientAddress = $_POST['client_address'];

// Process the data (e.g., display or store)
echo "Client Name: " . $clientName . "<br>";
echo "Client Address: " . $clientAddress;