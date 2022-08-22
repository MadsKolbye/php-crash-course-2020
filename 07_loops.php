<?php

// while
$counter = 0;
while($counter < 10) {
    echo $counter."<br>";
    if ($counter === 5){
        break;
    }
    $counter++;
}

// Loop with $counter

#ABOVE

// do - while
echo "<br>";
do {
    echo $counter."<br>";
    $counter ++;

} while ($counter <10);

// for
echo "<br>";
for ($i = 0; $i < 10; $i++){
    echo "$i"."<br>";
}

// foreach

$fruits = ["Banana", "Apple", "Peach"];
foreach ($fruits as $i => $fruit){
    echo $i. " ".$fruit."<br>";
}

// Iterate Over associative array.

$person =[
    "name" => "Brad",
    "surname" => "Kolbye",
    "pet" => "Alex"
];

foreach ($person as $key => $value){
    echo $key." ".$value."<br>";
}
