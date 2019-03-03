<?php

	session_start();
	if(!(isset($_SESSION['name'])&&isset($_SESSION['email'])))
	  	{
	    	header('Location: register.php');
	  	}
	session_destroy();
	header("Location: index.php");

?>