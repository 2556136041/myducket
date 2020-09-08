<?php
	//处理跨域报错
	header( "Access-Control-Allow-Origin: *");
	
	
	$kcid = $_POST["kcid"];
	

	
	//数据验证
	if($kcid==2){
	//根据$kcid到数据库中查询相关的数据
		$kc2 = array(
				["https://www.51zxw.net/list.aspx?cid=792",
			"https://www.51zxw.net/m/img/kcbm/792.jpg",
			"平面海报设计快速实战教程"],
			
				["https://www.51zxw.net/list.aspx?cid=766",
			"https://www.51zxw.net/m/img/kcbm/766.jpg",
			"电商视觉美工视频教程"],
			
				["https://www.51zxw.net/list.aspx?cid=774",
			"https://www.51zxw.net/m/img/kcbm/774.jpg",
			"字体创意设计视频教程"],
			
				["https://www.51zxw.net/list.aspx?cid=665",
			"https://www.51zxw.net/m/img/kcbm/665.jpg",
			"北京精雕编程加工视频教程"]
		);		
		
		
		//转成json数据类型
		echo json_encode($kc2);
	}
	

	
	//echo $uname;
	//echo $pwd;
?>