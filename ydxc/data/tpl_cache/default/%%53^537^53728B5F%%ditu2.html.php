<?php /* Smarty version 2.6.22, created on 2016-09-26 11:12:09
         compiled from ditu2.html */ ?>
﻿<!--头部文件-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--百度地图密钥-->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=173efa7b4d9760ef6a81f27efa9aa63e"></script>
</head>


<body>
<!--地图div-->
<div style="width:754px;height:600px;margin:0 auto" id="allmap2"></div>


<!--地图标志-->
<script type="text/javascript">
	// 百度地图API功能  
	map = new BMap.Map("allmap2");
	map.centerAndZoom(new BMap.Point(106.378133,29.60505), 13);
	var data_info = [
		[106.334763,29.614369,"陈家桥轻轨站1号出口出站即到 023-67303999"],
		[106.322528,29.632461,"医药高等专科学校东门易好平价超市旁 蒋:18323846308"],
		[106.312404,29.583318,"城市管理学院内商业街 电话：17723115183"],
		[106.442671,29.578246,"沙坪坝西永老街西永路252号 电话：023-65612118"],
		[106.439613,29.538644,"重庆沙坪坝区新桥医院旁500米 电话：023-65467310"],
	];
	var opts = {
		width : 250,     // 信息窗口宽度
		height: 80,     // 信息窗口高度
		title : "鼎吉驾校" , // 信息窗口标题
		enableMessage:true//设置允许信息窗发送短息
	  };

	for(var i=0;i<data_info.length;i++){
		var marker = new BMap.Marker(new BMap.Point(data_info[i][0],data_info[i][1]));  // 创建标注
		var content = data_info[i][2];
		map.addOverlay(marker);               // 将标注添加到地图中
		addClickHandler(content,marker);
	
		
		//修改公司名
		point = new BMap.Point(data_info[i][0],data_info[i][1]);
		var infoWindow = new BMap.InfoWindow(content, opts);  // 创建信息窗口对象 
		map.openInfoWindow(infoWindow, point);      // 打开信息窗口 
	
	
	
	
	}
	
	
	function addClickHandler(content,marker){
		marker.addEventListener("click",function(e){
			openInfo(content,e)
		});
	}

	
	function openInfo(content,e){
		var p = e.target;
		var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
		var infoWindow = new BMap.InfoWindow(content,opts);  // 创建信息窗口对象 
		map.openInfoWindow(infoWindow,point); //开启信息窗口
	}
</script>



