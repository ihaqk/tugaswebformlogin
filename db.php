<?php
// Create connection
$databaseHost = 'localhost';
$databaseName = 'tugas_login';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if ($mysqli->connect_error) {
    die("Connected failed: " . $mysqli->connect_error);
}
?>