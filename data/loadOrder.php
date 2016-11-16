<?php
    $uname = $_REQUEST['uname'];
    $link = mysqli_connect("localhost","root","","rent_car");
    $sql = "SET NAMES UTF8";
    mysqli_query($link,$sql);
    $sql = "SELECT * FROM orderList WHERE uname = '$uname'";
    $res = mysqli_query($link,$sql);
    $res = mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo json_encode($res);
?>