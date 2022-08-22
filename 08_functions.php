<?php

// Function which prints "Hello I am Zura"

function hello () {
    echo "Hello World";
}
hello();
// Function with argument
echo "<br>";
function hello2($name){
    return "Hello I am $name"."<br>";
}
echo hello2("Mads");



// Create sum of two functions

function sum($a, $b){
    return $a + $b;
}

echo sum(4, 5)."<br>";

echo "<br>";
function sumAll(...$nums){
    var_dump($nums);
    $sum = 0;
    foreach($nums as $n) {
        $sum += $n;
    }
    return $sum;
}
echo "<br>";
echo sumAll(1, 2, 3, 4, 5);
// Create function to sum all numbers using ...$nums

#ABOVE

// Arrow functions

#Didnt get this.
