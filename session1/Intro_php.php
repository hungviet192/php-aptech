<?php 
	echo "Xin chào";
	$a = 5;
	$Username = "HUNGVIET";
	$x = 5;
	$y = 10;
	echo $Username;
	echo "<br>";
	echo $x + $y;
	//hàm trong php
	function functionName(){

	}
	//gọi hàm
	functionName();
	//Hàm tính hiệu 2 số
	function Multi($a, $b){
		return $a - $b;
	}
	echo "<br>";
	echo Multi(8,4);
	//condition
	$var =  2;
	switch ($var) {
		case '1':
			//neu var = 1 thi thuc hien lenh nay
			break;
		case '2':
			//neu var = 2 thi thuc hien lenh nay
			break;
		default:
			//Neu var khac 1, 2 thi thuc hien lenh nay
			break;
	//vong lap for'
			echo "<br>";
			for ($i=1; $i < 10; $i++) { 
				echo $i;
				echo "<br>";
			}
	}
 ?>