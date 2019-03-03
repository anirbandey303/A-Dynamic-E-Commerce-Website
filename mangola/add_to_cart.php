<?php
	session_start();
	if(!(isset($_SESSION['name'])&&isset($_SESSION['email'])))
  	{
    	header('Location: register.php');
  	}
	include "includes/dbconnect.php";
	
	$product_id=$_GET['product_id'];
	$user_id=$_SESSION['user_id'];

	$delete="DELETE FROM `wishlist` WHERE `wishlist`.`product_id` LIKE '$product_id' AND `wishlist`.`user_id` LIKE '$user_id'";
			mysqli_query($connection,$delete);

	$query1="SELECT * FROM `cart` WHERE `product_id` LIKE '$product_id' AND `user_id` LIKE '$user_id'";
	$result1=mysqli_query($connection,$query1);
		
	if(mysqli_num_rows($result1)==0)
	{
		$query="INSERT INTO `cart` (`cart_id`, `product_id`, `user_id`) VALUES (NULL, '$product_id', '$user_id')";
		if(mysqli_query($connection,$query))
		{
			header('Location: product_description.php?product_id='.$product_id.'&msg=1');
		}
		else
		{
			echo "error!";
		}
	}
	elseif(mysqli_num_rows($result1)==1)
	{
		header('Location: product_description.php?product_id='.$product_id.'&msg=2');
	}
	else
	{
		echo "Some Error Occured";
	}
	
?>