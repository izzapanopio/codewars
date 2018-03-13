<?php 
/*
Everyone knows passphrases. One can choose passphrases from poems, songs, movies names and so on but frequently they can be guessed due to common cultural references. You can get your passphrases stronger by different means. One is the following:

choose a text in capital letters including or not digits and non alphabetic characters,

shift each letter by a given number but the transformed letter must be a letter (circular shift),
replace each digit by its complement to 9,
keep such as non alphabetic and non digit characters,
downcase each letter in odd position, upcase each letter in even position (the first character is in position 0),
reverse the whole result.
#Example:

your text: "BORN IN 2015!", shift 1

1 + 2 + 3 -> "CPSO JO 7984!"

4 "CpSo jO 7984!"

5 "!4897 Oj oSpC"

With longer passphrases it's better to have a small and easy program. Would you write it?

https://en.wikipedia.org/wiki/Passphrase
*/

function playPass($s, $n) {

    $splitChars = str_split($s);
    $result = "";
    foreach($splitChars as $key => $char){
      if (preg_match('/[a-zA-Z]/', $char)) {
        $next = $char;
        if($n > 0){
          $next = nextLetter(strtolower($char),$n);
        }
        $result .= $next;

      }elseif(preg_match('/[0-9]/', $char)) {
        $result .= (9-$char);
      }else{
        $result .= $char;
      }

    }
    $finalString = "";
    $result = strrev($result);
   
    foreach(str_split($result) as $key => $char){
      if (preg_match('/[a-zA-Z]/', $char)) {

          $index = $key+1 ;
        if ($index%2 == 0){
 
          $finalString .=  strtoupper($char);
        }else{

          $finalString .=  strtolower($char);
        }

      }else{
        $finalString .= $char;
      }

    }
    return $finalString;
    
}

function nextLetter($str,$n) {

  $chars = range('a', 'z'); 
  
  $currentKey =  array_search($str,$chars);
  $newKey = $currentKey + $n;
  if ($newKey >= count($chars)){
   
    $newKey =  abs($newKey - count($chars));
  }
  
  return $chars[$newKey];
  
}

?>
