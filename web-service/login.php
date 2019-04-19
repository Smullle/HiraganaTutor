<?php

session_start();

include_once 'dbConnect.php';

$id = mysqli_real_escape_string($conn, $_POST['user_id']);
$pass = mysqli_real_escape_string($conn, $_POST['user_pwd']);

if(empty($id) || empty($pass)){
    echo "<h2 class='required'>empty field.</h2>";
}

$sql = "SELECT * FROM users WHERE user_id='$id'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

if($resultCheck < 1) {
        echo "<h2 class='required'>No such user</h2>";
        exit();
    }

else{
    if ($row['user_pwd'] != $pass){
        echo "<h2 class='required'>Invalid password.</h2>";
    }
    elseif ($row['user_pwd'] == $pass){
        echo "<h2>Welcome $id!</h2>";

        $_SESSION['id'] = $row['user_id'];

        echo $row['quiz1'];
        echo $row['quiz2'];
        echo $row['quiz3'];
        echo $row['quiz4'];
        echo $row['quiz5'];
    }
}

?>