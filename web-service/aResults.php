<?php

session_start();

include_once 'dbConnect.php';

if (!empty($_POST['Question1']) && 
    !empty($_POST['Question2']) &&
    !empty($_POST['Question3']) &&
    !empty($_POST['Question4']) &&
    !empty($_POST['Question5']) &&
    !empty($_POST['Question6']) &&
    !empty($_POST['Question7']) &&
    !empty($_POST['Question8']) &&
    !empty($_POST['Question9']) &&
    !empty($_POST['Question10'])
){


$answer1 = $_POST['Question1'];
$answer2 = $_POST['Question2'];
$answer3 = $_POST['Question3'];
$answer4 = $_POST['Question4'];
$answer5 = $_POST['Question5'];
$answer6 = $_POST['Question6'];
$answer7 = $_POST['Question7'];
$answer8 = $_POST['Question8'];
$answer9 = $_POST['Question9'];
$answer10 = $_POST['Question10'];



$totalCorrect = 0;
$result = 0; 

if ($answer1 == "d") { $totalCorrect++; }
if ($answer2 == "b") { $totalCorrect++; }
if ($answer3 == "a") { $totalCorrect++; }
if ($answer4 == "b") { $totalCorrect++; }
if ($answer5 == "a") { $totalCorrect++; }
if ($answer6 == "d") { $totalCorrect++; }
if ($answer7 == "b") { $totalCorrect++; }
if ($answer8 == "b") { $totalCorrect++; }
if ($answer9 == "c") { $totalCorrect++; }
if ($answer10 == "a") { $totalCorrect++; }

$result = ($totalCorrect / 10) * 100;

$id = $_SESSION['id'];

$sql = "UPDATE users SET quiz1='<h2>Your result for Quiz 1 = $result %</h2>' WHERE user_id='$id'";
mysqli_query($conn, $sql);
echo "<h2>Your result for Quiz 1 = $result %</h2>";
}

else{
    echo "<h2 class='required'>Please answer all questions.</h2>";
}
?>
