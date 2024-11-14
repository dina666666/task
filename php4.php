<?php

$num = [10, 30, 20, 40, 50];

$sum = 0;
$count = count($num); 

for ($i = 0; $i < $count; $i++) {
    $sum += $num[$i]; 
}
$average = $sum / $count;
echo "Average: " . $average;

?>