<?php 
include_once('database.php');
//check if the form is submitted
if(isset($_POST['submit'])){
	$user = mysqli_real_escape_string($db,$_POST['user']);
	$message = mysqli_real_escape_string($db,$_POST['message']);

	if(!isset($_POST['user']) || $user == "" || !isset($_POST['message'])|| $message == ""){
		$error= "please fill in your name and message.";
		header("Location: index.php?error=".urlencode($error));
	}else{
		$query = "INSERT INTO SHOUTBOX(user,message)VALUES('$user','$message')";
		if(!mysqli_query($db,$query)){
			die("ERROR:" . mysqli_error($db));
		}else{
			header("Location: index.php");
			exit();
		}
	}


}

?>