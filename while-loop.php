<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;

while ($attempts < $maxAttempts) {
    echo "Guess the password: ";

    $quess = trim(fgets(STDIN));
    $attempts++;

    // if ($guess == $secret) {
    //     echo "correct! you are unlocked the treasure\n";
    // } elseif ($attempts == $maxAttempts) {
    //     echo "You have reached the maximum number of attempts\n";
    // } else {
    //     echo "Incorrect! try again\n";
    // }
    if ($quess == $secret) {
        echo "Correct! You have unlocked the treasure\n";
    } elseif ($quess == $maxAttempts) {
        echo "out of attempts! the treasure is locked forever\n";   
    } else {
        echo "wrong! try again\n". $maxAttempts - $attempts . " attempts left\n";
    }
}