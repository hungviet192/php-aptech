<?php 
function Show($arr3)
{
	foreach ($arr3 as $key => $value) {
		echo "<br>";
		echo $value['name'].'-'.$value['birthday'].'-'.$value['gender'];
	}
}
$arr3 = array(
				array(
						'name' => 'Khoi',
						'birthday' => 1997,
						'gender' => 'male'
						),
				array(
						'name' => 'Trung',
						'birthday' => 1985,
						'gender' => 'male'
						),
				array(
						'name' => 'Huyen',
						'birthday' => 1987,
						'gender' => 'female'
						),

);
Show($arr3);
echo "<br>";
$arr3[1]['name'] = 'Trung Doan';
Show($arr3);
echo "<br>";
array_push($arr3,array('name' => 'Cuong',
						'birthday' => 1996,
						'gender' => 'male')
						);
Show($arr3);

echo "<br>";
unset($arr3[0]);
Show($arr3);
echo "<br>";
foreach ($arr3 as $key => $value) {
	if ($value['gender'] == 'male') {
		echo "<br>";
		echo $value['name'].'-'.$value['birthday'].'-'.$value['gender'];
	}
}


 ?>