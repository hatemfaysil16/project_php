<?php


require 'desine/login.html';
require 'function.php';

if(isset($_POST['password'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    $addnewpassword = has_pass($password);
   $a = addSelected($name,$addnewpassword);
   $_SESSION['select']=$a;

   if(empty($name)){
    echo "is not name";
}

if(empty($password)){
    echo "is not password";
}

   if(!empty($a)){
    $_SESSION['user'] =  $a;
    header("LOCATION:page.php");
   }else{
    echo "is bad";
   }

}



?>