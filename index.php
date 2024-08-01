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

// PHP Variables Scope
$x = 5; // global scope
 
function myTest($y) {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $y</p>";
} 
function myTest2() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  function myTest3() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest3();
  myTest3();
  myTest3();
  
  myTest2();
  
  myTest($x);
  
echo "<p>Variable x outside function is: $x</p>";

// PHP also stores all global variables in an array called $GLOBALS[index].
//  The index holds the name of the variable. 
// This array is also accessible from within functions and can be used to update global variables directly.
?>