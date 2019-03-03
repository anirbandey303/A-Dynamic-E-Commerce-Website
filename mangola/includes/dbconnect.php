<?php
//connect to the DB
//connect to the server(server_name,server_user_id,server_user_password)
$connection= mysqli_connect("localhost","root",""); 

//connect to the database(access_info_variable,database_name)
mysqli_select_db($connection,"mangola");
?>