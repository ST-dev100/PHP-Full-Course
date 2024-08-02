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

// Change Data Type
// (string) - Converts to data type String
// (int) - Converts to data type Integer
// (float) - Converts to data type Float
// (bool) - Converts to data type Boolean
// (array) - Converts to data type Array
// (object) - Converts to data type Object
// (unset) - Converts to data type NULL
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;


$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

echo(pi());

echo(min(0, 150, 30, 20, -8, -200));
echo(max(0, 150, 30, 20, -8, -200));

echo(abs(-6.7));

echo(sqrt(64));

echo(round(0.60));
echo(round(0.49));

echo(rand());

echo(rand(10, 100));

// PHP Constants
// A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

// A valid constant name starts with a letter or underscore (no $ sign before the constant name).

// Note: Unlike variables, constants are automatically global across the entire script.

function n()
{
    define('A',8);
}
n();
echo A;
const MYCAR = "Volvo";
echo MYCAR;

define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}

myTest();

// const vs. define()

// const are always case-sensitive
// define() has a case-insensitive option.
// const cannot be created inside another block scope, like inside a function or inside an if statement.
// define can be created inside another block scope.

// PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".

// __CLASS__	If used inside a class, the class name is returned.	
// __DIR__	The directory of the file.	
// __FILE__	The file name including the full path.	
// __FUNCTION__	If inside a function, the function name is returned.	
// __LINE__	The current line number.	
// __METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
// __NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
// __TRAIT__	If used inside a trait, the trait name is returned.	
// ClassName::class	Returns the name of the specified class and the name of the namespace, if any.
echo " ".__DIR__;

// Short Hand If

$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;

$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;
echo "<br><br><br><br><br><br><br>";
print_r($_SERVER['REQUEST_METHOD']);
?>