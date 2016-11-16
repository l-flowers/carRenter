<?php
	header("Content-type:text/plain;Charset=UTF8");
	$uname = $_REQUEST['name'];
	$pwd = $_REQUEST['pwd'];
	if($uname&&$pwd){
	$link = mysqli_connect("localhost","root","","rent_car");
	$sql = "SET NAMES UFT8";
	mysqli_query($link,$sql);
	$sql = "SELECT * FROM user WHERE uname = $uname";
	$res = mysqli_query($link,$sql);
	if($res){
	    echo "exist";
	}else{
	    $sql = "INSERT INTO user VALUES (NULL,'$uname','$pwd')";
        $res = mysqli_query($link,$sql);
        if($res){
        	echo "succ";
        }else{
        	echo "error";
        }
	}
}
?>