<?php

function computeClosestToZero(array $ts) {
  // Write your code here
  // To debug (equivalent to var_dump): error_log(var_export($var, true));
  $response = 0;
  if(sizeof($ts) > 0)
   $response = $ts[0];

  foreach($ts as $val){
    if((abs($response)> abs($val)) || (abs($response) == abs($val) && ($response < $val)))
      $response =$val;
   
  }
  return $response;
}

print_r(computeClosestToZero([2,10,-12, -1, 200]));