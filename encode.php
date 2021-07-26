<?php

/*
	cette fonction retour une chaine avec avec le nombre d'occurences consécutives de chaque lettre 
*/
function encode(string $paintText) : String {
	$chars = str_split($paintText);
	$char = $chars[0];
	$cpt = 0; 
	$reponse = "";
	
	foreach($chars as  $item){
		if($char == $item){
			$cpt++;
		}else{
			$reponse .=$cpt.$char;
			$cpt = 1;
			$char = $item;	
		}
	}
	$reponse .=$cpt.$char;
	return $reponse;
}

// aaabbbc => 3a3b1z
print_r(encode("aaabbbz"));