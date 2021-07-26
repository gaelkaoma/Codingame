<?php
/*
En mathématiques, la suite de Fibonacci est une suite de nombres entiers 
dont chaque terme successif représente la somme des deux termes précédents,
et qui commence par 0 puis 1. Ainsi, les dix premiers termes qui la composent sont
0, 1, 1, 2, 3, 5, 8, 13, 21 et 34.  
Cette suite à la logique simple est considérée comme le tout premier modèle mathématique en dynamique des populations.
*/
function fibonacci(int $n) : array {
   
    $val = [];
    for($i =0; $i < $n ; $i++){
		if($i <=1){
			$val[] = $i;
		}else{
			$val[] = bcadd($val[$i-1], $val[$i-2]);
        }
    }
    return $val;
}

print_r (fibonacci(100));