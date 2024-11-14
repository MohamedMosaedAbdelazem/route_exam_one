<?php
$currentMonth = date("n");

$previousMonth = $currentMonth - 1;

if ($previousMonth == 0) {
    $previousMonth = 12;
}

echo "The previous month is: " . $previousMonth;
?>