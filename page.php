<?php

include 'function.php';

if(empty($_SESSION['user'])){
    header('LOCATION:login.php');
}else{
    echo "welcome.to Egypt " ; 

    echo '<a href="logout.php">logout</a>';

}

$allData =AllSelected();




echo "<br>";
echo "<pre>";
print_r($allData);

$permisson = user_data();

print_r($permisson);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<table border="1">

    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>img</th>
        <?php if($permisson==1):?>
        <th>update</th>
        <th>delete</th>
        <?php endif?>

</tr>


<?php foreach($allData as $ad ):?>
<tr>
        <th> <?php echo $ad['id']?> </th>
        <th> <?php echo $ad['name']?> </th>
        <th> <?php echo $ad['email']?> </th>
        <th> <?php echo $ad['phone']?> </th>
        <th> <img width="100%" src="img/<?php echo $ad['img']?>" alt="img"> </th>
<?php if($permisson==1):?>
        <th><a href="update.php?pro=<?php echo $ad['id']?>">update</a></th>
        <th><a href="delete.php?pro=<?php echo $ad['id']?>">delete</a></th>
<?php endif?>
</tr>
<?php endforeach?>


</table>

    
</body>
</html>


