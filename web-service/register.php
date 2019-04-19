<?php

session_start();

include_once 'dbConnect.php';

$id = mysqli_real_escape_string($conn, $_POST['user_id']);
$pass = mysqli_real_escape_string($conn, $_POST['user_pwd']);

if(empty($id) || empty($pass)){
    echo "<h2 class='required'>empty field.</h2>";
}
else {
    $sql = "SELECT * FROM users WHERE user_id='$id'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
        echo "<h2 class='required'>Username taken<h2>";
        exit();
    }

    $sql = "INSERT INTO users (user_id, user_pwd) VALUES ('$id', '$pass');";

    mysqli_query($conn, $sql);

    echo "<h2>Welcome $id</h2>";

    
}

?>