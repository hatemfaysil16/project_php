<?php
include 'function.php';


$id = $_GET['pro'];


$avs =$_SESSION['select']['id'];


echo "<pre>";
print_r($avs);


if($avs == $id){
echo "is not permotion";
}else{
    if(!empty($id)){
        delete($id);
        header("LOCATION:page.php");
    }else{
        header("LOCATION:page.php");
    }
}












?>

