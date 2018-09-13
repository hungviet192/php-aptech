<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
</head>
<body>
	<h1> REGISTER FORM </h1>
<form name="registerform" action="#" method="POST">
	<p> Name: <input type="text" name="Name"></p>
	<p> Email: <input type="text" name="Email"></p>
	<p><input type="Submit" name="submit" value="Register"></p>
</form>
<?php 
//var_dump($_POST)
if (isset($_POST['submit'])) {
	echo "da submit".'<br>';
	echo $_POST['Name'].'<br>';
	echo $_POST['Email'].'<br>';
}else {
	echo "chua submit";
}
 ?>
</body>
</html>