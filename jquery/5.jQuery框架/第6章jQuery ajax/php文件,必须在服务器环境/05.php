<?php
	//处理跨域报错
	header( "Access-Control-Allow-Origin: *");
	
	
	$kcid = $_POST["kcid"];
	

	
	//根据$kcid到数据库中查询相关的数据
	if($kcid==1){  //查询电脑办公课程
		$kc = array(
				["https://www.51zxw.net/list.aspx?cid=785",
			"https://www.51zxw.net/m/img/kcbm/785.jpg",
			"WPS2019视频教程（表格篇）"],
				["https://www.51zxw.net/list.aspx?cid=649",
			"https://www.51zxw.net/m/img/kcbm/649.jpg",
			"Excel2016基础视频教程"],
				["https://www.51zxw.net/list.aspx?cid=571",
			"https://www.51zxw.net/m/img/kcbm/571.jpg",
			"Acrobat2015视频教程"],
				["https://www.51zxw.net/list.aspx?cid=770",
			"https://www.51zxw.net/m/img/kcbm/770.jpg",
			"Power Query基础到进阶教程"]
		);			
	}elseif($kcid==2){
		$kc = array(
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
	}elseif($kcid==3){
		$kc = array(
				["https://www.51zxw.net/list.aspx?cid=659",
			"https://www.51zxw.net/m/img/kcbm/659.jpg",
			"3D2018室内设计入门教程"],
				["https://www.51zxw.net/list.aspx?cid=691",
			"https://www.51zxw.net/m/img/kcbm/691.jpg",
			"sketchup2018基础教程"],
				["https://www.51zxw.net/list.aspx?cid=683",
			"https://www.51zxw.net/m/img/kcbm/683.jpg",
			"CAD2019装修施工图教程"],
				["https://www.51zxw.net/list.aspx?cid=765",
			"https://www.51zxw.net/m/img/kcbm/765.jpg",
			"CAD布局绘图高阶用法教程"]
		);		
	}else{
		$kc = array(
				["https://www.51zxw.net/list.aspx?cid=517",
			"https://www.51zxw.net/m/img/kcbm/517.jpg",
			"建筑动画入门教程"],
				["https://www.51zxw.net/list.aspx?cid=685",
			"https://www.51zxw.net/m/img/kcbm/685.jpg",
			"Vertex BD轻钢别墅教程"],
				["https://www.51zxw.net/list.aspx?cid=708",
			"https://www.51zxw.net/m/img/kcbm/708.jpg",
			"ArcGIS视频教程"],
				["https://www.51zxw.net/list.aspx?cid=459",
			"https://www.51zxw.net/m/img/kcbm/459.jpg",
			"景观设计手绘教程"]
		);		
	}
	
		//转成json数据类型
		echo json_encode($kc);

?>