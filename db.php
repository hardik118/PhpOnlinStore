<?php

$servername ="mysql-14f97612-hardikyadav1182005-6846.e.aivencloud.com";
$username ="avnadmin";
$password = "AVNS_T22ErJJYSY5rS0kIRkR";
$db = "defaultdb";
$port="28115";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db, $port);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
