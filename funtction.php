<?php
declare(strict_types= 1); // this is to enable strict type checking

function greet ($name) {
    echo ("hello ". $name ."");

}

function greetWithTime ($name, $time = "day") {
    echo "Good ". $time .", ". $name . "\n";
    
}

// echo greet ("John\n");
// echo greet ("bob");
// echo greetWithTime("Ja","evening");


// type of function
// 5 - types 
// PHP v-7 strict types 
function add (int $a, int $b):int {
    return $a + $b;
}

var_dump(add(5, 5));
