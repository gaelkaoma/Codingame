<?php 

function scanChar($s){
	$chars = range("A","Z");
	
	foreach($chars as $char){
		if(printChar($char) == $s){
			return $char;
		}
	}
	return "?";
}

