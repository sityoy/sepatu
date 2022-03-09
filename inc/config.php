<?php 
	session_start();
	($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost",  "smksisla_sepatu", "Sepatu1@"));
	mysqli_select_db($GLOBALS["___mysqli_ston"], "smksisla_sepatu");
	
	// settings
	$url = "https://sityoy.smksislambahagia.sch.id/";
	$title = "Website Pemesanan Sepatu";
	$no = 1;
	
	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}
	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}
	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
?>