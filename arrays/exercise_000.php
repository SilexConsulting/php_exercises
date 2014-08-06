<?php

/**
 * Insert the numbers [1:50], inclusive, in $integers.
 */

$integers = array();

for($i = 0; $i < 51; $i++){
  $integers[] = $i;
}
var_dump($integers);
/**
 * Insert the EVEN numbers between 1 and 50 in $even_integers.
 */
$even_integers = array();

for($i = 0; $i < 51; $i++){
  if($i % 2 === 0){
    $even_integers[] = $i;
  }

}
var_dump($even_integers);




