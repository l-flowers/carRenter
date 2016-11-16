<?php
    $orderTime = time();
    $days = $_REQUEST['days'];
    $tel = $_REQUEST['tel'];
    $cname = $_REQUEST['cname'];
    $cid = $_REQUEST['cid'];
    $uname = $_REQUEST['uname'];
    $oname = rand(10000000,99999999);
    $link = mysqli_connect("localhost","root","","rent_car");
    $sql = "SET NAMES UTF8";
    mysqli_query($link,$sql);
    $sql = "INSERT INTO orderList VALUES (NULL,'$cid','$cname','$uname','$tel','$days','$orderTime','$oname',0)";
    $res = mysqli_query($link,$sql);
    if($res){
        echo "succ";
    }else{
        echo "error";
    }
?>