<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
</head>
<body>
	<h1> REGISTER FORM </h1>
<form name="registerform" action="#" method="GET">
	<p> Name: <input type="text" name="Name"></p>
	<p> Email: <input type="text" name="Email"></p>
	<p><input type="Submit" name="submit" value="Register"></p>
</form>
<?php 
//var_dump($GET)
if (isset($_GET['submit'])) {
	echo "da submit".'<br>';
	echo $_GET['Name'].'<br>';
	echo $_GET['Email'].'<br>';
}else {
	echo "chua submit";
}
 ?>
</body>
</html>