<?php 
	session_start();
	require_once("new-connection.php");

	$_SESSION['name'] = $_POST['name'];
	$_SESSION['quote'] = $_POST['quote'];

	$name = $_POST['name'];
	$quote = $_POST['quote'];
	$date = date('g:i A F d Y');

	if (empty($_SESSION['name'])) 
	{
		$_SESSION['error'] = "Please fill up your name!";
		header("location: index.php");
	}
	else if (empty($_SESSION['quote'])) 
	{
		$_SESSION['error'] = "Please put your quote!";
		header("location: index.php");
	}
	else 
	{
		$insert = "INSERT INTO quotes (name, quote, created_at) 
				VALUES ('$name', '$quote', '$date')";

		if(mysqli_query($connection, $insert))
		{
			unset($_SESSION['error']);
		   	header("location: main.php");
		} 

		else {
			$_SESSION['error'] = "Something went wrong.";
			header("location: index.php");
		}
	}
		

	
?>