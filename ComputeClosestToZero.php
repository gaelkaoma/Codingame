<?php
/*
cette fonction prend un tableau de température $ts en paramètre et renvoie la températures la plus proche 
de zéro.
Si le tableau est vide, la fonction soit renvoyer 0
Si deux températures sont aussi proches de zéro, la fonction devra renvoyer  la température 
positive(ex : -5 et 5, renvoyez 5)
*/
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