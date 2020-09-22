<?php 

	// if(isset($_GET['name'])){
	// 	//do db task
	// 	echo 'success';
	// }
	session_start();

	if($_SESSION['captcha'] == $_POST['cap']){
		echo 'captcha matched';
		//database

	}else{
		echo 'Invalid Captcha';
	}
	
	




?>