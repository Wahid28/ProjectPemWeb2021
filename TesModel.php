<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "Model.php"; ?>
    <form action="Model.php" method="get">
        <input type="text" name="nama" id="nama" placeholder="Username"> <br>
        <input type="text" name="password" id="password" placeholder="Password">
        <input type="submit" name="submitLogin" id="submitLogin"> 
        <div id="cancel"><a href="">CANCEL</a> </div>
    </form>
</body>
</html>

<?php 

// include "Model.php";

// $data1 = new Data();
// $data1->setName("Daniel");
// echo $data1->nama;  

// $data2 = new Data("Daniel");
// echo $data2->nama;

// $apple = new Fruit("Apple");
// echo $apple->get_name();

// $apple = new Fruit("Apple");
// echo $apple->name;

// $data3 = new Data("Daniel");
// echo $data3->get_Data();

?>