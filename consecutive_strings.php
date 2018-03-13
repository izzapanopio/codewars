<?php
/*
You are given an array strarr of strings and an integer k. Your task is to return the first longest string consisting of k consecutive strings taken in the array.

#Example: longest_consec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"

n being the length of the string array, if n = 0 or k > n or k <= 0 return "".
*/


function longestConsec($strarr, $k) {
    // your code
    
    if(count($strarr) == 0 || $k > count($strarr) || $k <= 0)
      return "";

    $finalString = "";
    for($i=0;$i<count($strarr);$i++){
      
      $lengthOfCurrent = strlen($strarr[$i]);
    
      if(($i + ($k-1)) > count($strarr)){
        $limit = count($strarr) -1;
      }elseif(($i + ($k-1)) ==count($strarr)){
        $limit = count($strarr) -1;
      }else{
        $limit = $i + ($k-1);
      }
      
      if($finalString){
        $tempFinalString = "";
        
        for($c=$i;$c<=$limit;$c++){
          $tempFinalString .= $strarr[$c];
        }
        
        if(strlen($tempFinalString) == strlen($finalString)){
          //final string will remain unchanged
        }elseif(strlen($tempFinalString) > strlen($finalString)){
          $finalString = $tempFinalString;
        }
      }else{
        //if finalString is empty
        for($c=$i;$c<=$limit;$c++){
          $finalString .= $strarr[$c];
        }
      }
    
    }

    
    return $finalString;
}
?>
