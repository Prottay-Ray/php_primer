<?php
$title = "Date and Time Manipulation";
include "includes/header.php";
echo "So, now we are going to see Date and Time Manipulation : <br>";
echo "<h1> Hare Krishna </h1>";
//Testing various features in PHP
$datenow = getdate();
echo $datenow['mday'],"/ ";
echo $datenow['mon']," /",$datenow['year'];
echo "<br><br> Date and Time: <br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>