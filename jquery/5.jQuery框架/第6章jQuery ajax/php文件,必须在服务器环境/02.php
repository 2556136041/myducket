<?php
	//处理跨域报错
	header( "Access-Control-Allow-Origin: *");
	
	
	$uname = $_POST["uname"];
	$pwd = $_POST["password"];
	
	//转成json数据类型
	echo json_encode([$uname,$pwd]);
	
	//echo $uname;
	//echo $pwd;
?>