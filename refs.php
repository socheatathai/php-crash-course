<?php

$person =  "John";
$client = &$person;


var_dump($person , $client);

$client = "Doe";


var_dump($person , $client);






