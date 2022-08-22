<?php

// Create array

$fruits = ["Banana", "Apple", "Orange"];



// Print the whole array
echo "<pre>";
var_dump($fruits)."<br>";
echo "</pre>";
/*
 * Check kildetekst
 */

// Get element by index

echo $fruits[1]."<br>";

// Set element by index

$fruits[0] = "Peach";
var_dump($fruits)."<br>";

// Check if array has element at index 2
echo "<br>";
echo isset($fruits[2])."<br>";

// Append element

$fruits[] = "Banana";
echo var_dump($fruits)."<br>";

// Print the length of the array

echo count($fruits)."<br>";

// Add element at the end of the array

array_push($fruits, "foo");
echo var_dump($fruits)."<br>";

// Remove element from the end of the array

array_pop($fruits)."<br>";
var_dump($fruits);

// Add element at the beginning of the array
echo "<br>";
echo "<br>";
array_unshift($fruits, 'bar');
echo var_dump($fruits)."<br>";

// Remove element from the beginning of the array

array_shift($fruits);


// Split the string into an array

$string = "Banana,Apple,Peach";
var_dump(explode(",", $string));

// Combine array elements into string
echo "<br>";
echo implode("&", $fruits)."<br>";

// Check if element exist in the array

echo var_dump(in_array("Apple", $fruits))."<br>";

// Search element index in the array

echo var_dump(array_search("Apple", $fruits))."<br>";

// Merge two arrays

$vegetables = ["Carrot", "Potato"];
$merge = array_merge($fruits, $vegetables);
echo var_dump($merge)."<br>";

var_dump([...$fruits], [...$vegetables]);
// Sorting of array (Reverse order also)

sort($fruits);
echo var_dump($fruits)."<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    "name" => "Mads",
    "surname" => "Kolbye",
    "age" => "28",
    "hobbies" => ["WoW", "Programming"]
];

echo "<pre>";
echo var_dump($person);
echo "</pre>";
// Get element by key

echo $person["name"]."<br>";

// Set element by key

$person["Channel"] = "Discovery";
echo "<pre>";
echo var_dump($person);
echo "</pre>";

// Null coalescing assignment operator. Since PHP 7.4

/*
if (!isset($person["address"])) {
    $person["address"] = "unknown";
}

*/
$person["address"] ??= "unknown";

echo "<pre>";
echo var_dump($person);
echo "</pre>";

// Check if array has specific key



// Print the keys of the array

var_dump(array_keys($person));

// Print the values of the array

var_dump((array_values($person)));

// Sorting associative arrays by values, by keys
echo "<br>";
echo "<br>";
ksort($person);
echo "<pre>";
echo var_dump($person);
echo "</pre>";

// Two dimensional arrays

$todos = [
    ["title" => "Todo title 1", "Completed" => true],
    ["title" => "Todo title 2", "Completed" => false]
];

echo "<pre>";
echo var_dump($todos);
echo "</pre>";