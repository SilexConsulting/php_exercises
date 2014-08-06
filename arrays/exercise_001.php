<?php

$numbers = array(2,4,6,8,10,12);

/**
 * Sum the array. Do not use the array_sum() function. Echo the total to the screen.
 */
$total = my_array_sum($numbers);

function my_array_sum($numbers)
{
    $sum = 0;
	foreach($numbers as $number){
      $sum += $number;
    }
  return $sum;
}
echo $total;
