<?php

$serverName = "localhost";
$dbUsername = "admin";
$dbPassword = "admin";
$dbName = "penzugy";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failer: " .mysqli_connect_error());
}