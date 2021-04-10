<?php

// Create array
$fruits = ["Banana","Apple","Orange"];

// Print the whole array
echo('<pre>');
var_dump($fruits);
echo('</pre>');

// Get element by index
echo($fruits[0]).'<br>';

// Set element by index

// Check if array has element at index 2

// Append element
$fruits[] = 'Peach';
var_dump($fruits);
echo('<br>');
// Print the length of the array
echo(count($fruits)).'<br>';

// Add element at the end of the array
array_push($fruits, 'Watermelon');

echo(var_dump($fruits)) . '<br>'; 

// Remove element from the end of the array
array_merge($fruits, [1,2,3]); 

// Add element at the beginning of the array
$person = [
    'name' => "Michael",
    'age' => 22,
    'channel' => 'Fellowsip',
    'hobbies' => ['Ministering','Praying']
];

var_dump(array_values($person)).'<br>';

// Remove element from the beginning of the array
 
// Split the string into an array

// Combine array elements into string

// Check if element exist in the array

// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays