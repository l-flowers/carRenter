<?php
    $cid = $_REQUEST['cid'];
    $link = mysqli_connect("localhost","root","","rent_car");
    $sql = "SET NAMES UTF8";
    mysqli_query($link,$sql);
    $sql = "SELECT * FROM car WHERE cid = '$cid'";
    $res = mysqli_query($link,$sql);
    $res = mysqli_fetch_assoc($res);
    echo json_encode($res);
?>