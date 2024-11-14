<?php
$mainString = "My name is Mohamed Mosaed";
$searchString = "Mohamed";

if (preg_match("/$searchString/", $mainString)) {
    echo "The string contains '$searchString'.";
} else {
    echo "The string does not contain '$searchString'.";
}
?>