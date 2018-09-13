<html>
<head>
<meta charset="utf-8">
<title>FORM ĐĂNG KÝ </title>
<style type="text/css">
    p{
    margin:0;
    padding:0;
    padding-bottom:10px;
}
body{
    width:1000px;
    margin:auto    
}
.body{
    margin:auto;
    padding:0;    
}
.left{
    padding-right:70px;    
    padding:0;
    margin:0;
}
.right{
    padding-left:70px;
    margin:0; 
    } 
.error{
    color: red;
}

}
</style>
</head>
<body>
<?php 
    $submit="";
    $name = "";
    $email = "";
    $pass = "";
    $repass=  "";
    $gender = "";
    $country = "";
    $note =  "";
    $image = "";

if($_SERVER['REQUEST_METHOD']== 'POST') {
    $name = $email  = $pass = $repass=  $gender = $country = $note = $image = "";
    $name = checkInput($_POST['name']);
    $email = checkInput($_POST['email']);
    $pass = checkInput($_POST['pass']);
    $repass = checkInput($_POST['repass']);;
    $country = checkInput($_POST['country']);
    $note = checkInput($_POST['note']);
    $image = checkInput($_POST['image']);
}
if(isset($_POST['submit'])){
    $name = $email = $pass = $repass=  $gender = $country = $note =  $image = "";
    $nameError = $emailError = $passError = $repassError = $genderError = $countryError = $noteError = $imageError = "";
    if (empty($_POST['name'])){
     
        $nameError = "   * Bạn cần nhập họ tên";
    }else {
        $name = checkInput($_POST['name']);
    }
    if (empty($_POST['email'])){
     
        $emailError = "   * Bạn cần nhập Email";
    }else {
        $email = checkInput($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "   * Email không đúng định dạng"; 
    }
    }
    if (empty($_POST['pass'])){
     
        $passError = "   * Bạn cần nhập mật khẩu";
    }else {
        $pass = checkInput($_POST['pass']);
    }
    if (empty($_POST['repass'])){
     
        $repassError = "   * Bạn cần nhập lại mật khẩu";
    }else {
        $repass = checkInput($_POST['repass']);
        if ($repass != $pass) {
            $repassError = "   * Mật khẩu nhập lại không chính xác";
        }
    }
    if (!isset($_POST['gender'])){
     
        $genderError = "    * Bạn cần nhập giới tính";
    }else {
        $gender = checkInput($_POST['gender']);
    }
    if (empty($_POST['country'])){
     
        $countryError = "   * Bạn cần nhập quê quán";
    }else {
        $country = checkInput($_POST['country']);
    }
    if (empty($_POST['note'])){
     
        $noteError = "   * Bạn cần nhập mô tả";
    }else {
        $note = checkInput($_POST['note']);
    }
    if (empty($_POST['image'])){
     
        $imageError = "   * Bạn cần chọn ảnh";
    }else {
        $image = checkInput($_POST['image']);
    }
    }

function checkInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 ?>
<div class="body">
<center><h1>ĐĂNG KÝ THÔNG TIN</h1></center>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table border="0" cellpadding="0" cellspacing="0">
<tr class="table">
    <td class="left"><p>Họ và Tên </p></td>
    <td class="right"><p><input type="text" name="name">
    <span class="error"><?php if(isset($nameError))  echo $nameError?></span></p>
</td>
    
</tr>
<tr class="table">
    <td class="left"><p>Email </p></td>
    <td class="right"><p><input type="text" name="email">
     <span class="error"><?php if(isset($emailError))  echo $emailError?></span></p>
     </td>
</tr>
<tr class="table">
    <td class="left"><p>Mật khẩu</p></td>
    <td class="right"><p><input type="password" name="pass">
     <span class="error"><?php if(isset($passError))  echo $passError?></span></p>
     </td>
</tr>
<tr class="table">
    <td class="left"><p>Nhập lại mật khẩu</p></td>
    <td class="right"><p><input type="password" name="repass">
     <span class="error"><?php if(isset($repassError))  echo $repassError?></span></p>
     </td>
</tr>
<tr class="table">
    <td class="left"><p>Giới tính</p></td>
    <td class="right"><p><input type="radio"  name="gender" value="male"> Nam <input type="radio" name="gender" value="female"> Nữ
    <span class="error"><?php if(isset($genderError))  echo $genderError?></span></p>
     </td>
</tr>
<tr class="table">
    <td class="left"><p>Quê quán</p></td>
    <td class="right">
           <p>
        <select name="country">
          <option value=""></option>
          <option value="Cần Thơ">Cần Thơ</option>
          <option value="Đồng Tháp">Đồng Tháp</option>
          <option value="Sóc Trăng">Sóc Trăng</option>
          <option value="Đà Nẵng">Đà Nẵng</option>
        </select>
         <span class="error"><?php if(isset($countryError))  echo $countryError?></span></p>
    </td>
</tr>
<tr class="table">
    <td class="left"><p>Thông tin mô tả bản thân </p></td>
    <td class="right"><p><textarea style="height:100px;width:500px" name="note"></textarea>
    <span class="error"><?php if(isset($noteError))  echo $noteError?></span></p>
     </td>
</tr>
<tr class="table">
    <td class="left"><p>Avatar </p></td>
    <td class="right"><p><input type="file" name="image"accept="image/jpg" value="Chọn ảnh" />
    <span class="error"><?php if(isset($imageError))  echo $imageError?></span></p>
     </td>
</tr>
<tr>
<td colspan="2">
  <center><input type="submit" value="Đăng ký" name="submit" > 
</center>
</td>
</tr>
</table>
</form>
<?php
echo "<h2>Thông Tin</h2>";
if ($submit=='submit') {
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $pass;
echo "<br>";
echo $gender;
echo "<br>";
echo $country;
echo "<br>";
echo $note;
echo "<br>";
echo $image;  
}else echo "<span class = 'error'>", "Đăng ký không thành công","</span>" ;

?>
</div>
  
     </body>   
</html>
