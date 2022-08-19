<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations

echo ($a + $b) * $c . "<br>";
echo $a - $b . "<br>";


// Assignment with math operators

$a += $b; echo $a  . "<br>";


// Increment operator

echo $a . "<br>";
$a++  . "<br>";
echo "new a $a"  . "<br>";

// Decrement operator

echo --$a  . "<br>";

// Number checking functions

echo is_float(1.25)  . "<br>";
echo is_int($a) . "<br>";
echo is_numeric("3.25") . "<br>";

// Conversion

$strNumber = "12.35";
$number = (float)$strNumber;

echo $number  . "<br>";

var_dump($number)  . "<br>";
// Number functions
echo "<br>";
echo "abs(-15)" . abs(-15)  . "<br>";
echo "pow (2, 5)" . pow(2, 5)  . "<br>";

// Formatting numbers

$number1 = 123456789.12345;

echo number_format($number1, 2, ".", " ");

// https://www.php.net/manual/en/ref.math.php
