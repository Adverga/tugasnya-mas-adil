<?php
	if(isset($_POST['submit'])){
		if ($_POST['username']=="sesuatu" && $_POST['pass']=="rahasia") {
			header("Location:login.php");
		}
		else{
			header("Location:index.php");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Web Index</title>
</head>
<body>
	<center>
		<form method="POST" action="#">
			<h3>Username :</h3>
			<input type="text" name="username">
			<h3>Password :</h3>
			<input type="password" name="pass">
			<br><br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</center>
</body>
</html>
