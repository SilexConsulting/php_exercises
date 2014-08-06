<?php

$numbers = array(
	array(2,4,6,8,10),
	array(1,3,5,7,9),
	array(10,20,30),
);

/**
 * Sum all the elements of all the arrays (hint: the function you wrote in Exercise 001 might help).
 */
$sum = 0;

foreach($numbers as $array){
  foreach($array as $item){
    $sum = my_array_sum($array);
    $total =+ $sum;
  }
  echo $total . "</br>";
}

function my_array_sum($numbers)
{
  $sum = 0;
  foreach($numbers as $number){
    $sum += $number ;
  }
  return $sum;
}
