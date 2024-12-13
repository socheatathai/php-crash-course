<?php
declare(strict_types=1); // Enable strict type checking

// Function to calculate sum of numbers
function sum(int ...$numbers): int {
    $sum = 0;
    var_dump($numbers);
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

// Testing sum function
var_dump(sum());           // Error: Argument missing in strict mode.
var_dump(sum(5));          // Output: 5
var_dump(sum(5, 10, 15));  // Output: 30

$numbers = [1, 2, 3];
var_dump(sum(...$numbers)); // Output: 6

// Function to introduce a team
function introduceTeam(string $teamName, string ...$members): void {
    echo "Team: $teamName\n";
    echo "Members: " . implode(", ", $members) . "\n";
}

// Testing introduceTeam function
introduceTeam("A Team", "John", "Mr. T");

$members = ["harry", "Johnny", "Doe"];

introduceTeam("B Team",...$members);
introduceTeam("C Team","John", "Mr. T" ,...$members);



