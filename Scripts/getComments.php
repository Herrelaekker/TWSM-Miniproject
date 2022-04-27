<?php

include 'connect.php';

   	$name = $_REQUEST["q"];
    $comment = $_REQUEST["b"];

    if (empty($name) or empty($comment)) {
    } else {
    $sql = "INSERT INTO Posts (username, comment)
VALUES ('$name', '$comment')";
    $result = mysqli_query($connect, $sql);}
    
$sql = "SELECT id, username, comment FROM Posts";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br><div class='borderexample'>id: " . $row["id"]. " -<b> Name: </b>" . $row["username"]. "<br/><b> Comment:</b>" . $row["comment"]. "</div>";
    }
} else {
    echo "0 results";
}

$comments = $comment;

// Output "no suggestion" if no hint was found or output correct values
//echo  $comments;
?>