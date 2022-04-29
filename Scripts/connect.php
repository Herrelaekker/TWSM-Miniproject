<?php

$host_name  = "localhost";
$user_name  = "dbo677415121";
$password   = "P4ssw0rd";
$database   = "db_forum_prototype";
$connect = mysqli_connect($host_name, $user_name, $password, $database);
    
$sql = "CREATE TABLE IF NOT EXISTS Posts (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(12) NOT NULL,
comment VARCHAR(300) NOT NULL,
reg_date TIMESTAMP
)";

?>
