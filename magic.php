<?php

/*
	Vous transportez un certain nombre de pierres ayant chacune un niveau n (entier, 0<n<10000)
	Deux pierres d'un meme niveau n peuvent etre fusionnées pour créerune pierre de niveau n+1
	la fonction magic retourne le nombre MINIMUM de pierres pouvant être atteint par fusion successives.
	
	ex :[1,2,1] => [2,2] => [3]  Dans cette exemple, le nombre minimum de pierres est 1
	Ecrivez le corps de la fonction magic ($stones). $stones est un tablau d'entiers wui contient au moins un élément.
*/
function magic($stones){
	
	$permutation =true;
	while ($permutation){
		$permutation = false;
		$i = 0;
		sort($stones); // met le tableau en ordre croissant
		//  b print_r($stones);
		$stones_tp = [];
		while($i < sizeof($stones)){
			if(($i+1 < count($stones) )&& ($stones[$i] == $stones[$i+1])){
				$stones_tp[] = $stones[$i]+1;
				array_splice($stones, $i,2);
				$permutation=true;	
			}else{
				$i++;
			}
			$stones = array_merge($stones, $stones_tp);
			$stones_tp = [];
		}
	}
	return count($stones);
}// print_r(magic([3,2,1,1]));