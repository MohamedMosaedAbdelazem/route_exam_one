<?php
function filterEvenNumbers($array) {
    $filteredArray = [];
    
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 != 0) {
            $filteredArray[] = $array[$i];
        }
    }
    return $filteredArray;
}

$numbers = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$result = filterEvenNumbers($numbers);

echo "New Array: ";
print_r($result);
?>