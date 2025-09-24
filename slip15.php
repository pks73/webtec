<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $str = $_POST['a'];
    $op = $_POST['op'];

    switch ($op) {
        case 1:
            echo "<h3>First 5 Words from String:</h3><br>";
            $words = explode(" ", $str);
            $firstFive = array_slice($words, 0, 5);
            echo implode(" ", $firstFive);
            break;

        case 2:
            echo "<h3>Lowercase to Titlecase:</h3><br>";
            $lower = strtolower($str);
            $title = ucwords($lower);
            echo "Converted: " . $title;
            break;

        case 3:
            echo "<h3>Padded String:</h3><br>";
            echo str_pad($str, strlen($str) + 10, "*", STR_PAD_BOTH);
            break;

        case 4:
            echo "<h3>String without Leading Whitespace:</h3><br>";
            echo ltrim($str);
            break;

        case 5:
            echo "<h3>Reversed String:</h3><br>";
            echo strrev($str);
            break;

        default:
            echo "Invalid option selected.";
    }

} else {
    echo "No data submitted.";
}
?>

