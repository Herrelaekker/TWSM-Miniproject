<?php

include 'connect.php';


$name = $_GET["username"];
$comment = $_GET["comment"];

if (empty($name) or empty($comment)) {
} else {
    $sql = "INSERT INTO Posts (username, comment)
    VALUES ('$name', '$comment')";
    $result = mysqli_query($connect, $sql);
}
    
$sql = "SELECT id, username, comment, reg_date FROM Posts ORDER BY id DESC";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br><div class='borderbox'><b class='username'>" . $row["username"] ."</b> ". $row["reg_date"]. "</br><br>" . $row["comment"]. "</div></br>";
    }
}
?>
