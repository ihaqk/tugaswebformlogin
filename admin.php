<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body{
        background-image: url("Gambar1.png");
    }
    h1{
        margin-top: 10%;
        text-align: center;
        width: 20%;
        margin-left: 39.5%;
    }  
    .masuk{
        text-align: left;
        padding-top: 1%;
        padding-bottom: 1%;
        margin-left: 34.5%;
        margin-top: 0%; 
        background-color: #FFDE59;
        height: auto;
        width: 30%;
        border-radius: 10px;
    }
    .Daftar{
        padding-top:0%;
        padding-left: 5%;
    }
    table{
        margin: auto;
        border-spacing: 40px 20px;
        padding-top: 5%;
    }
    tr{
        font-size: 14px;
    }
</style>
<body>
    <h1>Masukkan Akun</h1>
        <div class="masuk">
            <table>
				<form action="login2.php" method="POST">
					<tr>
						<td><label id="username" for="username">Username</label></td>
						<td><input type="username" name="username" placeholder="Input Username..."></td>
					</tr>
					<tr>
						<td><label id="password" for="password">Password</label></td>
						<td><input type="password" name="password" placeholder="Input Password..."></td>
					</tr>
					<tr>
						<td style="padding-left: 66%;"><input class="tombol" type="submit" name="submit" value="Masuk"  onclick="popup()"></td>
					</tr>
				</form>
            </table>
        </div>
</body>
<script>
	function popup(){
    username = document.getElementByName("username").value;
    password = document.getElementByName("password").value;
		if (username =="" && password==""){alert("Username dan Password Tidak Boleh Kosong! Silahkan Lengkapi Data Login Terlebih Dahulu");}
      	else if (username==""){alert("Silahkan Isi Username Anda Terlebih Dahulu!");}
      	else if (password==""){alert("Silahkan Isi Password Anda Terlebih Dahulu!");}
 }
 </script>
</html>