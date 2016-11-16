<?php

	$pwd = $_REQUEST['pwd'];
	$uname = $_REQUEST['name'];
	$link = mysqli_connect("localhost","root","","rent_car");
	$sql = "SET NAMES UFT8";
	mysqli_query($link,$sql);
	$sql = "SET NAMES UTF8";
    mysqli_query($link,$sql);
	$sql = "SELECT * FROM user WHERE pwd = '$pwd' AND uname = '$uname'";
	$res = mysqli_query($link,$sql);
	$res = mysqli_fetch_assoc($res);
	if($res){
		echo json_encode($res);
	}else{
		echo "error";
	}
?>