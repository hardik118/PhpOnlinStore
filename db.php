<?php

$servername ="mysql-14f97612-hardikyadav1182005-6846.e.aivencloud.com";
$username ="avnadmin";


// Create connection
$con = mysqli_connect($servername, $username, $password,$db, $port);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
