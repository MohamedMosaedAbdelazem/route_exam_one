<?php

function ascSort($array)
{
    $ascSortedArray = $array;
    for ($i = 0; $i < count($ascSortedArray); $i++) {
        for ($j = $i + 1; $j < count($ascSortedArray); $j++) {
            if ($ascSortedArray[$i] > $ascSortedArray[$j]) {
                // Swap
                $temp = $ascSortedArray[$i];
                $ascSortedArray[$i] = $ascSortedArray[$j];
                $ascSortedArray[$j] = $temp;
            }
        }
    }
    return $ascSortedArray;
}

function descSort($array)
{
    $descSortedArray = $array;
    for ($i = 0; $i < count($descSortedArray); $i++) {
        for ($j = $i + 1; $j < count($descSortedArray); $j++) {
            if ($descSortedArray[$i] < $descSortedArray[$j]) {
                // Swap
                $temp = $descSortedArray[$i];
                $descSortedArray[$i] = $descSortedArray[$j];
                $descSortedArray[$j] = $temp;
            }
        }
    }
    return $descSortedArray;
}

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
echo "<h2>Ascending Order:</h2>";
print_r(ascSort($array));
echo "<br>";
echo "<h2>Descending Order:</h2>";
print_r(descSort($array));