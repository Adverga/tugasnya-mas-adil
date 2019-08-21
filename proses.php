<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location:index.php');
	}
	$n = $_GET['nilai-n'];
	for ($i=1; $i <= $n ; $i++) { 
		for ($j=1; $j <=$1 ; $j++) { 
			echo $j;
		}
	}	
?>
