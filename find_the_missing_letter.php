<?php
/*
You will always get an valid array. And it will be always exactly one letter be missing. The length of the array will always be at least 2.
The array will always contain letters in only one case.

Example:

['a','b','c','d','f'] -> 'e'
['O','Q','R','S'] -> 'P'
(Use the English alphabet with 26 letters!)
*/


function find_missing_letter(array $array): string {
 
  $lettersInput = $array;
  $letters = range('a','z');
  if(ctype_upper($lettersInput[0]))
    $letters = range('A','Z');
    
  $new = array();
  foreach($lettersInput as $key=>$letter){
    $key = array_search($letter,$letters);
    $new[$key] = $letter;
  }
  
  
  $keys = array_keys($new);
  $prevKey = "";
  foreach($keys as $counter=>$key){
    
    if($counter == 0){
      $prevKey = $key;
    }else{
      if($key-$prevKey > 1)
        return $letters[$key-1];
      else
        $prevKey = $key;
    }
  }
}

?>
