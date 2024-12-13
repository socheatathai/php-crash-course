<?php

$greet = function ($name) {
    return "Hello, $name";
};

echo $greet("John");


$numbers = [1,2,3];
$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);


var_dump($numbers,$squared);

$message = "Bye";
$greet = function ($name) use ($message) {
    $message = $message ."!";
    return "$message, $name";
};

echo $greet("John");
echo $message ."\n";