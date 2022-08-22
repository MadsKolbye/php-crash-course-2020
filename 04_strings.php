<?php

// Create simple string

$name = 'Zura';
$string = 'Hello I am ' . $name . ' and I am 18 years old';
$string2 = "Hello $name" . $name; //Can put variable directly into the string

echo $string. '<br>';
echo $string2. '<br>';


// String concatenation

echo 'hello '.'world'. '<br>';

// String functions

$string = "Hello World ... !   ";
echo "strlen method ".strlen($string). '<br>';
echo "trim method ".trim($string). '<br>';
echo "upper method ".strtoupper($string). '<br>';
echo "count method ".str_word_count($string). '<br>';


// Multiline text and line breaks

$longText = "
    Hello, my name is Mads
    I am 28 years old,
    I love Alex
";

echo $longText. '<br>';
echo nl2br($longText). '<br>';;

// Multiline text and reserve html tags

$longText = "
    Hello, my name is <b>Mads</b>
    I am <b>28</b> years old,
    I love Alex
";
echo $longText."<br>";
echo nl2br($longText)."<br>";
echo nl2br(htmlentities($longText));


// https://www.php.net/manual/en/ref.strings.php