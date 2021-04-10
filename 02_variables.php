<?php

// What is a variable

// Variable types

// Declare variables
$name = "Michael";
$age = 28;
$isMale = true;

// Print the variables. Explain what is concatenation
echo ("$name is good").'<br>'; 

// Print types of the variables
echo(gettype($isMale)).'<br>';

// Print the whole variable
var_dump($name).'<br>';

// Change the value of the variable

// Print type of the variable
echo(is_string($name)).'<br>';

// Variable checking functions

// Check if variable is defined
echo(isset($name)).'<br>';


// Constants
define('PI', 3.14);
echo PI.'<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>';