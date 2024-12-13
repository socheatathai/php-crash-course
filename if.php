<?php

$x = 10;

if ($x == 10) {
    $x = 10;
    echo "x is 10\n";
} else {
    $x = 10;
    echo "x is not 10\n";
}
$x = 10;
if ($x > 5) {
    echo "x is greater than 5\n";
}

$score = 85;

if ($score >= 90) {
    echo "A\n";
} elseif ($score >= 80) {
    echo "B\n";
} elseif ($score >= 70) {
    echo "C\n";
} elseif ($score >= 60) {
    echo "D\n";
} else {
    echo "F\n";
}

$num = 3;

if ($num > 0) {
    if ($num == 1) {
        echo "one \n";
    } elseif ($num == 2) {
        echo "two \n";
    } elseif ($num == 3) {
        echo "three \n";
    } else {
        echo "more than three \n";
    }
}

$username ="admin";
$password = "password123";
if ($username == "admin" && $password == "password123") {
    echo "Login successful\n";
} else {
    echo "Login failed\n";
}