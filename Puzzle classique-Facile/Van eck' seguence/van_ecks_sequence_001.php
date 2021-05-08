<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 *joel bourachot
 **/

fscanf(STDIN, "%d", $A1);
fscanf(STDIN, "%d", $N);

 //initialisation variables
	 $i=1;
     $terme[$i]=$A1;
	$cible=$N; 			
                
while ($i<$cible)

	{
			for ($j = $i; $j <1; $j--)

					 {



						 if ( $terme[$j] = $terme[$j-1])
						
							 $terme[$j+1]=1;

					 }
                     $i=$i+1;

				$terme[$i]=0;

}
	 


$answer=$terme[$cible];
// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)




echo("$answer\n");
?>