<?php

// Function which prints "Hello I am Zura"
function pprint(){
    echo("Hello I am Zura").'<br>';
}

pprint();

// Function with argument
function argFunc($name){
    echo("Hello my name is $name").'<br>';
}
argFunc("mICHAEL");

// Create sum of two functions

// Create function to sum all numbers using ...$nums
// function sum(...$nums){
//     $total=0;

//     foreach($nums as $num){
//         $total += $num;
//     }
//     echo($total).'<br>';
// }

// sum(1,2,3,4,5);

// Arrow functions
function sum(...$nums){
    array_reduce($nums, fn($carry, $n) => $carry + $n );
}