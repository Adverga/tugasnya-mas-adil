<?php
	session_start();
	if(isset($_POST['submit'])){
		if ($_POST['username']=="sesuatu" && $_POST['pass']=="rahasia") {
			$_SESSION['username'] = "sesuatu";
			header("Location:web.php");
		}
		else{
			header("Location:index.php");
		}
	}
?>
