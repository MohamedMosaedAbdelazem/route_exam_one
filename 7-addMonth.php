<?php
$date = "2012-12-21";

$dateObject = new DateTime($date);

$dateObject->modify("+1 month");

$newDate = $dateObject->format("Y-m-d");

echo "New Date: " . $newDate;
?>