<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
include 'db.php';
    
$username = $_POST['username'];
$password = $_POST['password'];
    
$login = mysqli_query($mysqli, "SELECT * FROM form WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);        
    
if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    setcookie($_SESSION['username'], $_SESSION['password'], time() + (86400 * 30), "/");
    echo "<script>alert('Anda berhasil Login'); document.location.href = 'lanjutanlogin.php';</script>;";
}else{
    echo "<script>alert('Data anda salah atau Data anda ada yang kosong'); document.location.href = 'admin.php';</script>";	
}
?>
</body>
</html>