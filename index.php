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

// echo and print are more or less the same. They are both used to output data to the screen.
// The differences are small: 
// echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
echo "Hello";
//same as:
echo("Hello");

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';

print "Hello";
//same as:
print("Hello");

print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";


$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>" . $txt1 . "</h2>";
print "<p>Study PHP at " . $txt2 . "</p>";

// PHP supports the following data types:

// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource

//integer
$x = 5;
var_dump($x);

//String
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);

//Float
$x = 10.365;
var_dump($x);

//Array

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br><br><br>";
class Vichel
{
    public $wheel;
    public $size;
    function __construct($wheel,$size)
    {
        $this->wheel = $wheel;
        $this->size = $size;
    }
    function hi()
    {
        echo "$this->wheel";
    }
}

$car = new Vichel(12,44);
$car->hi();
var_dump($car);
// PHP NULL Value
$x = "Hello world!";
$x = null;
var_dump($x);
?>