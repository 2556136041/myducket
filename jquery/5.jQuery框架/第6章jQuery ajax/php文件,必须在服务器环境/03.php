<?php
	//处理跨域报错
	header( "Access-Control-Allow-Origin: *");
	
	
	$uname = $_POST["uname"];
	$pwd = $_POST["password"];
	
	//根据$uname到数据库中查询相关的数据
	$hy = array("uname"=>"小明","pwd"=>"123456","money"=>"50000");
	
	//数据验证
	if($pwd==$hy["pwd"]){
		//转成json数据类型
		echo json_encode($hy);
	}
	

	
	//echo $uname;
	//echo $pwd;
?>