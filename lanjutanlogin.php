<?php 
require 'db.php';
session_start();
echo "Hai, selamat datang ". $_SESSION['username'];
?>
