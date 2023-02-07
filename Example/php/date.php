<?php
echo "<h1>Date Format Ex.</h1>";

// we want to calculate age of person in day
// we will get date and then print number of days since brithday 
// ex 10136days output

$birthday = strtotime("18-10-1995");
$currentDate = strtotime("now");

echo $currentDate - $birthday;

?>