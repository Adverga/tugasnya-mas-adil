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
