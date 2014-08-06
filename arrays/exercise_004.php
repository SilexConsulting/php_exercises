<?php

$numbers = array(10,20,30,40,50,60,70,80);

var_dump(my_array_reverse($numbers));

/**
 * Write a function that accepts an array, reverses the order of its elements, and returns the modified array.
 *
 * Do not use array_reverse().
 */

function my_array_reverse($array)
{
  foreach($array as $item){
    $new_array[] = array_pop($array);
    echo $item;
  }

return $new_array;

}