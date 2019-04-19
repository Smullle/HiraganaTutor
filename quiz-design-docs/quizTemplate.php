<?php

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

if ($answer1 == "B") { $totalCorrect++; }
if ($answer2 == "A") { $totalCorrect++; }
if ($answer3 == "C") { $totalCorrect++; }
if ($answer4 == "D") { $totalCorrect++; }
if ($answer5 == "D") { $totalCorrect++; }
if ($answer6 == "D") { $totalCorrect++; }
if ($answer7 == "D") { $totalCorrect++; }
if ($answer8 == "D") { $totalCorrect++; }
if ($answer9 == "D") { $totalCorrect++; }
if ($answer10 == "D") { $totalCorrect++; }

echo "<div id='results'>$totalCorrect / 10 correct</div>";
?>