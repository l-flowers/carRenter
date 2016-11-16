<?php
	header("Content-type:text/plain;Charset=UTF8");
	$aname = $_REQUEST['name'];
	$pwd = $_REQUEST['pwd'];
	$link = mysqli_connect("localhost","root","","rent_car");
	$sql = "SET NAMES UFT8";
	mysqli_query($link,$sql);
	$sql = "SELECT * FROM admin WHERE aname = '$aname' AND pwd = '$pwd'";
	$res = mysqli_query($link,$sql);
	$res = mysqli_fetch_assoc($res);
	if($res){
		echo $res['aname'];
	}else{
		echo "error";
	}
?>