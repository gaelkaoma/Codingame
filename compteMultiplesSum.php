<?php

/*
cette function doit renvoyer la SOMME DE TOUS LES MULTIPLES positifs de 3 ou 5 ou 7 strictement inférieurs à n 
 ex : pour n = 11, on obtient 3, 5, 6, 7, 9, 10 en tant quemultiples et la somme de ces multiples vaut 40

*/
function compteMultiplesSum($n){	
	$sum =0;
	for($i =0; $i<$n; $i++){
		if($i%3 == 0 || $i%5 == 0 || $i%7 ==0)
			$sum +=$i;
	}
	return $sum;
}
print_r(compteMultiplesSum(15)); //=> 66
