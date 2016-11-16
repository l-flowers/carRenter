<?php
	header("Content-type:text/plain;Charset=UTF8");
	$aname = $_REQUEST['name'];
	$pwd = $_REQUEST['pwd'];
	$email = $_REQUEST['mail'];
	if($aname&&$pwd){
	$link = mysqli_connect("localhost","root","","rent_car");
	$sql = "SET NAMES UFT8";
	mysqli_query($link,$sql);
	$sql = "SELECT * FROM admin WHERE aname = '$aname'";
	$res = mysqli_query($link,$sql);
	$res = mysqli_fetch_assoc($res);
	if($res){
	    echo "exist";
	}else{
	    $sql = "INSERT INTO admin VALUES (NULL,'$aname','$pwd','$email')";
        $res = mysqli_query($link,$sql);
        if($res){
        	echo "succ";
        }else{
        	echo "error";
        }
	}
}
?>