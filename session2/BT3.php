<?php 
function show($arr)
{
	foreach ($arr as $key => $value) {
		echo $key. '-'. $value;
		echo "<br>";
}
}
$arr = array();
$arr = array('Bánh kẹo', 'Trái cây', 'Đồ chơi');
	show($arr);
	echo "<br>";
array_push($arr, 'Áo quần');
show($arr);
echo "<br>";
$arr[0] = 'Thực Phẩm';
show($arr);
echo "<br>";
unset($arr[1]);
show($arr);
 ?>