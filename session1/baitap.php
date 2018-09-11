<?php 
 for ($i=1; $i <= 40; $i++) { 
 	if ($i % 15 == 0 && $i % 3 == 0 && $i % 5 == 0) {
 		
 		echo"$i MƯỜI LĂM";
 		echo "<br>";
 	}elseif ($i%3==0) {
 		
 		echo  "$i BA";
 		echo "<br>";
 	}elseif ($i % 5 ==0) {
 	
 		echo" $i NĂM";
 		echo "<br>";
 	}else{
 		
 		echo "$i Không chia hết cho 3, 5, 15";
 		echo "<br>";
 	}
 }

 ?>