<?php

$servername ="onlineshopdb.c784acue4v8e.us-east-1.rds.amazonaws.com";
$username ="admin";
$password = "HY2005hy2005";
$db = "onlineshopdb";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
