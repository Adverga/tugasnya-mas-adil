<?php
	session_start();
	if(isset($_POST['submit'])){
		if ($_POST['username']=="sesuatu" && $_POST['pass']=="rahasia") {
			header("Location:web.php");
			$_SESSION['username'] = "sesuatu";
		}
		else{
			header("Location:index.php");
		}
	}
?>
