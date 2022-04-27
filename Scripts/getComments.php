<?php

include 'connect.php';


   	$name = $_REQUEST["q"];
    $comment = $_REQUEST["b"];

    if (empty($name) or empty($comment)) {
    } else {
    $sql = "INSERT INTO Posts (username, comment)
VALUES ('$name', '$comment')";
    $result = mysqli_query($connect, $sql);}
    
$sql = "SELECT id, username, comment, reg_date FROM Posts ORDER BY id DESC";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //$newDate = date("d-m-Y", strtotime($row["reg_date"]));
        
        echo "<br><div class='borderexample'><b class='username'>" . $row["username"] ."</b> ". $row["reg_date"]. "</br><br>" . $row["comment"]. "</div></br>";
    }
} else {
    echo "0 results";
}
?>
