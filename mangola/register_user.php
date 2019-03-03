<?php
	session_start();	
	if(!(isset($_POST['user_name'])&&isset($_POST['user_email'])))
  	{
    	header('Location: register.php?msg=108');
  	}
  	include "includes/dbconnect.php";
	//fetch the user data
	$name=$_POST['user_name'];
	$email=$_POST['user_email'];
	$password=$_POST['user_password'];

	//check for already registerd user
	$query1="SELECT * FROM `users` WHERE `email` LIKE '$email'";
	$result1=mysqli_query($connection,$query1);
	if(mysqli_num_rows($result1)==0)
	{
		//push data to the DB
		$query="INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')";
		if (mysqli_query($connection,$query))
		{
			//redirect
			$_SESSION['name']=$name;
			$_SESSION['email']=$email;

			$query1="SELECT * FROM `users` WHERE `email` LIKE '$email' AND `password` LIKE '$password'";
			$result1=mysqli_query($connection,$query1);
			$row1=mysqli_fetch_assoc($result1);
			$_SESSION['user_id']=$row1['user_id'];
			header('Location: products.php');
		}
	}
	elseif(mysqli_num_rows($result1)==1)
	{
		header('Location: register.php?msg=2');
	}
	else
	{
		echo "Some Error occured!";
	}


//redirect


?>