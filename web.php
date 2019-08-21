<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir</title>
</head>
<body>
	<center>
		<form action="proses.php" method="GET">
			Input nilai-n: <br>
			<input type="text" name="nilai-n"><br>
			<input type="submit" value="Submit">
		</form>	
	</center>
</body>
</html>