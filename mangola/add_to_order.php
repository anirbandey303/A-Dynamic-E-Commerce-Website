<?php
	session_start();
	if(!(isset($_SESSION['name'])&&isset($_SESSION['email'])))
  	{
    	header('Location: register.php');
  	}
	include "includes/dbconnect.php";

	$product_id=$_GET['product_id'];
	$user_id=$_SESSION['user_id'];

	$delete="DELETE FROM `cart` WHERE `cart`.`product_id` LIKE '$product_id' AND `cart`.`user_id` LIKE '$user_id'";
	mysqli_query($connection,$delete);

	$query1="SELECT * FROM `orders` WHERE `product_id` LIKE '$product_id' AND `user_id` LIKE '$user_id'";
	$result1=mysqli_query($connection,$query1);
		
	if(mysqli_num_rows($result1)==0)
	{
		$query="INSERT INTO `orders` (`order_id`, `user_id`, `product_id`) VALUES (NULL, '$user_id', '$product_id');";
		if(mysqli_query($connection,$query))
		{
			header('Location: details_form.php?product_id='.$product_id.''); //redirect**
		}
		else
		{
			echo "error!";
		}
	}
	elseif(mysqli_num_rows($result1)==1)
	{
		header('Location: show_cart_items.php?product_id='.$product_id.'&msg=22');
	}
	else
	{
		echo "Some Error Occured";
	}
	
?>