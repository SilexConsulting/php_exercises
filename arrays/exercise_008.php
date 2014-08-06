<?php

$a1 = array(1,2,3,4,5,6,7,8,9,10);
$a2 = array(6,7,8,9,10,11,12);

var_dump(my_array_intersection($a1, $a2));

/**
 * Write a function that accepts two arrays and returns their INTERSECTION as an array. That is, only the elements that are in A1 AND A2.
 *
 * Avoid array_*() functions.
 */

function my_array_intersection($array1, $array2)
{
  $intersection = array();
for($i = 0; $i < count($array1); $i++){
  if(in_array($array1[$i], $array2)){
    $intersection[] = $array1[$i];
  }
}
return $intersection;

}
