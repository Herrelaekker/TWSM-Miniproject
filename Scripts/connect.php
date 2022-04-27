<?php

$host_name  = "localhost";
$database   = "db_forum_prototype";
$user_name  = "dbo677415121";
$password   = "P4ssw0rd";
$connect = mysqli_connect($host_name, $user_name, $password, $database);

    
    
    
     $sql = "CREATE TABLE IF NOT EXISTS Posts (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(12) NOT NULL,
 comment VARCHAR(300) NOT NULL,
 reg_date TIMESTAMP
 )";

 mysqli_query($connect, $sql)


	//echo '<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>';
//else
    //echo '<p>Connection to MySQL database ' . $database . ' successfully established.</p>';
?>
