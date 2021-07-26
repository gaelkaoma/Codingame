<?php
$N =15000; // nbre de repetitions 
$n =0; // nbre sible atteinte
 if( $N != 0 )
{
  
  //cette fonction génère un nbre aleatoire < 1
   function rnd()
   {
		return rand (-1000,1000) / 1000;
   }
   
   for ( $i = 1 ; $i <= $N ; $i++ )
   {
	   $x = rnd(); // coord x
	   $y = rnd(); //coord y
	   $r =  pow($x,2) + pow($y,2);
	   if ( $r <= 1)
	   {
		 $n++;
	   }
   }
   $pi = 4 * $n / $N ; // valeur approximative de PI
   $pourcent = round ( abs( (($pi - pi()) / pi()) * 100 ) , 1 );
   echo "Avec $N fléchettes, on obtient PI~ <font color=red> $pi </font><br /> Ecart avec pi : $pourcent %";

}