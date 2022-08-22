<?php

$age = 20;
$salary = 300000;

// Sample if

if ($age == 20){
    echo "1";
}


// Without circle braces

if ($age == 20) echo "1";


// Sample if-else

if ($age > 20) {
    echo "1";
} else {
    echo "2";
}
echo "<br>";
echo "<br>";
echo "<br>";

// Difference between == and ===

if ($age == 20){
    echo "1"."<br>";
}

if ($age === "20") {
    echo "2"."<br>";
}
#=== checks type ie typesecure.

// if AND

if ($age == 20 AND $salary === 300000) {
    echo "Do something";
}

// if OR

if ($age == 20 OR $salary === 300000) {
    echo "Do something";
}
echo "<br>";
// Ternary if

echo $age < 22 ? "Young!" : "Old";

// Short ternary

$myAge = $age ?: 18;

echo "<pre>";
echo var_dump($myAge);
echo "</pre>";

// Null coalescing operator

//$myName = isset($name) ? $name : "Mads";
//same thing:
$myName ?? "Mads";

// switch

$userRole = "editors";
switch ($userRole) {
    case "admin":
        echo "I am admin";
        break;
    case "editor":
        echo "I am editor";
        break;
    case "user":
        echo "user";
        break;
    default:
        echo "invalid role lmao";
}

