<?php

// while

// Loop with $counter
$counter = 0;

// while($counter < 10){ 
//     echo($counter).'<br>';
//     $counter++;
// }

// do - while
 do {
    echo($counter) . '<br>';
    $counter++;
 } while($counter < 10 );


// for

// foreach
$fruits = ['banana','apple','mango'];

foreach($fruits as $index => $fruit){
    echo($fruit).'<br>';
}


// Iterate Over associative array.

$person = [
    'name' => "Michael",
    'age' => 22,
    'channel' => 'Fellowsip',
    'hobbies' => ['Ministering','Praying']
];

foreach($person as $key => $value){
    if (is_array($value)){
        echo("$key => ".implode(",", $value)).'<br>';
    }
    echo("$key => $value").'<br>';
}