<?php
$numbers = [3, 4, 1, 5, 9];

$sum = 0;
$count = count($numbers);

for ($i = 0; $i < $count; $i++) {
    $sum += $numbers[$i];
}

$average = $sum / $count;

echo "The average is: " . $average;
