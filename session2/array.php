<?php 
$arr = array();
//var_dump($arr);
$arr = array('a', 'b', 'c');
$arr1 = array(0=> "a",1=> "b",2=> "c" );
$arr2 = array(4=> "a",5=> "b",6=> "c");
//var_dump($arr1);
//var_dump($arr2);
echo $arr[1];
echo $arr2[4];
echo "<br>----------------<br>";
foreach ($arr2 as $key => $value) {
	echo $value;
	echo "<br>";
}

 ?>