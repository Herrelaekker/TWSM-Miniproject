<?php

$host_name  = "localhost";
$database   = "db_forum_prototype";
$user_name  = "dbo677415121";
$password   = "P4ssw0rd";
$connect = mysqli_connect($host_name, $user_name, $password, $database);

if(mysqli_connect_errno())
	//echo '<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>';
//else
    //echo '<p>Connection to MySQL database ' . $database . ' successfully established.</p>';
?>
