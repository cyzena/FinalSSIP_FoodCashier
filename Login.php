<?php	

	session_start();
	//koneksi database
	require 'function.php';

	//cek apakah tombol submit sudah ditekan
	if(isset($_POST["login"])){
			$username = $_POST["username"];
			$password = $_POST["password"];



			$result = mysqli_query($conn, "SELECT * FROM `login` WHERE LogName = '$username' and LogPwd = '$password'");
			$cek = mysqli_num_rows($result);

			if($cek > 0){
				
				if($_SESSION['login'] = false){
					echo "<script>alert('Username/Password Salah');</script>";
					
				}else{
					
					header("location: OrderMenu.php");
			}
			}



			$error = true;
}
?>		

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
	<h1>Warunk CarryU</h1>

	<div class="kotak_login">
	<p class="tulisan_welcome">Welcome</p>

	<form action="" method="post">
		<label for="username">Username 	:</label>
		<input type="text" name="username" class="form_login" placeholder="Username.." id="username" required>
				
		<label for="password">Password :</label>
		<input type="password" name="password" class="form_login" placeholder="Password .." id="password" required>

		<button type="submit" class="tombol_login" name="login">LOGIN</button>
	</form>
</body>
</html>