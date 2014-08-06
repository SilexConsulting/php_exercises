<?php

$numbers1 = array(10,20,30,40,50,60,70,80);

$numbers2 = array(9,8,7,6);

$numbers3 = array(5,5,5,5,5,5,4);

var_dump(array_swap_first_last($numbers1));

var_dump(array_swap_first_last($numbers2));

var_dump(array_swap_first_last($numbers3));

/**
 * Write a function that accepts an array, swaps the first and last elements, and returns the modified array.
 */

 function array_swap_first_last($array)
 {
   $last = $array[0];
   $array[0] = $array[count($array) - 1];
   $array[count($array) - 1] = $last;

     return $array;
 }