<?php
session_start();

function addDataBase($name,$email,$phone,$password,$img){

$conn =mysqli_connect('localhost','root','','fs19');

$insert ="INSERT INTO `user`(`name`, `email`, `phone`, `password`,`img`)
 VALUES('$name','$email','$phone','$password','$img')";

 $Q = mysqli_query($conn,$insert);

 $a = mysqli_affected_rows($conn);

 if($a){
     echo "is good";
 }else{
     echo  "false";
 }
 
}


function addSelected($name,$password){
    $conn =mysqli_connect('localhost','root','','fs19');
    $select = "SELECT * FROM `user` WHERE `name`='$name'&&`password`= '$password'";
    $Q = mysqli_query($conn,$select);
    $a = mysqli_fetch_assoc($Q);

    return $a;



}




function AllSelected(){
    $conn =mysqli_connect('localhost','root','','fs19');
    $select = "SELECT * FROM `user` ";
    $Q = mysqli_query($conn,$select);
    $error = [];
    while( $a = mysqli_fetch_assoc($Q)){
        $error[]=$a;
    }
    return $error;

}

function delete($id){
    $conn =mysqli_connect('localhost','root','','fs19');
    $delete = "DELETE FROM `user` WHERE `id`='$id'";
    $Q = mysqli_query($conn,$delete);
}

function has_pass($password){
   return sha1($password);
}

function user_data(){
    return $_SESSION['select']['users_role'];
}


?>