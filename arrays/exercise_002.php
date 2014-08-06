<?php

$numbers = array(2,4,6,8,10,12);

/**
 * Cube all the numbers in-place. 4*4*4 = 64. Echo the result to the screen.
 */

for($i =0; $i < count($numbers); $i++){

  $cube = $numbers[$i] * $numbers[$i] * $numbers[$i];
  $numbers[$i] = $cube;
}

var_dump($numbers);