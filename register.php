<?php
require 'desine/register.html';
require 'function.php';






if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $error =[];



if(empty($name)){
    echo $error[]="is not name";
}
if(empty($email)){
    echo $error[]="is not email";
}
if(empty($phone)){
    echo $error[]="is not phone";
}
if(empty($password)){
    echo $error[]="is not password";
}


    if( !empty($name)&&!empty($email)&&!empty($password)&&!empty($phone) ){

echo "<pre>";
print_r($_POST);
echo "<pre>";
print_r($_FILES);


$tmp_name = $_FILES['file']['tmp_name'];
$type = $_FILES['file']['type'];


$typeofar = explode("/",$type);
$a = $typeofar[1];

$img = 'ahmed'.'.'.$a;
move_uploaded_file($tmp_name,'img/'.$img);


$addnewpassword = has_pass($password);
addDataBase($name,$email,$phone,$addnewpassword,$img);

// print_r($users_role);


        header("LOCATION:login.php");
    }
}





?>