<?php

// What is a variable

// Variable types
/*
 * String
 * Integer
 * Float/Double
 * Boolean
 * Null
 * Array
 * Object
 * Resource
 */
// Declare variables
$name = "Mads";
$age = 28;
$family = ["Mads", "Sebastian", "Jonathan", "Karen", "Johanne", "Jakob", "Alex", 2900];
$isMale = true;
$height = 1.94;
$salary = null;
// Print the variables. Explain what is concatenation
echo "My name is $name and <br>I'm $age years old!</br>";
echo $name."<br>";
echo $age."<br>";
echo $isMale."<br>";
echo $height."<br>";
echo $salary."<br>";
// Print types of the variables
echo gettype($name)."<br>";
echo gettype($age)."<br>";
echo gettype($isMale)."<br>";
echo gettype($height)."<br>";
echo gettype($salary)."<br>";

// Print the whole variable
echo "<br>";
var_dump($name, $age, $isMale, $height, $salary);
// Change the value of the variable
$name = "Kristian";
echo"<br>";
var_dump($name);
// Print type of the variable
echo gettype($name);
// Variable checking functions
echo "<br>";
echo is_string($name);
echo "<br>";
echo is_int($age);
echo "<br>";
echo is_bool($isMale);
echo "<br>";
echo is_null($salary);
echo "<br>";
echo is_int($name); //Null which means it doesn't print onto the site since it's an empty string
echo "end";
echo "<br>";
// Check if variable is defined
echo isset($name);
echo "<br>";
echo isset($animal); //Null
// Constants
define('PI', 3.14);
echo PI."<br>";
// Using PHP built-in constants
echo SORT_ASC."<br>";
echo PHP_INT_MAX."<br>";

