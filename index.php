<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Full Course</h1>
</body>
</html>
<?php

// String Length
echo strlen("Hello world!");
// Word Count
echo str_word_count("Hello world!");

// Search For Text Within a String

echo strpos("Hello world!", "world");

// Upper Case
$x = "Hello World!";
echo strtoupper($x);
// Lower Case
$x = "Hello World!";
echo strtolower($x);
// Replace String
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
// Reverse a String
$x = "Hello World!";
echo strrev($x);
// Remove Whitespace
$x = " Hello World! ";
echo trim($x);
// Convert String into Array
$x = "Hello World!";
$y = explode(" ", $x);

echo "<br><br><br>";
//Use the print_r() function to display the result:
print_r($y);

echo "<br><br><br>";
// Start the slice at index 6 and end the slice 5 positions later:
$x = "Hello World!";
echo substr($x, 6, 5);
// By leaving out the length parameter, 
// the range will go to the end:
$x = "Hello World!";
echo substr($x, 6);
// To insert characters that are illegal in a string,
//  use an escape character.
$x = "We are the so-called \"Vikings\" from the north.";

$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
var_dump($b);
var_dump($c);

// Check if the type of a variable is integer:

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

// Check if the type of a variable is float:
    $x = 10.365;
var_dump(is_float($x));

// Invalid calculation will return a NaN value:
$x = acos(8);
var_dump($x);
?>