<?php
/*
Given an array, find the int that appears an odd number of times.
There will always be only one integer that appears an odd number of times.
*/


function findIt(array $seq) : int
{
    $valueCounter = array_count_values($seq);
    
    if (count($valueCounter) == 1)
      return $seq[0];
      
    foreach($valueCounter as $key => $value){
    
      if($value%2 != 0)
        return $key;
    }
    
}



?>
