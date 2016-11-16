<?php
    $brand = $_REQUEST['brand'];
    $count = $_REQUEST['count'];
    $driveMode = $_REQUEST['driveMode'];
    $energy = $_REQUEST['energy'];
    $engine = $_REQUEST['engine'];
    $gearbox = $_REQUEST['gearbox'];
    $img = $_REQUEST['img'];
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $seat = $_REQUEST['seat'];
    $zone = $_REQUEST['zone'];
    $link = mysqli_connect("localhost","root","","rent_car");
    $sql = "SET NAMES UTF8";
    mysqli_query($link,$sql);
    $sql = "INSERT INTO car VALUES (NULL,'$brand','$name','$price','$count','$img','$engine','$gearbox','$seat','$zone','$energy','$driveMode')";
    $res = mysqli_query($link,$sql);
    if($res){
        echo 'succ';
    }else{
        echo "error";
    }
?>