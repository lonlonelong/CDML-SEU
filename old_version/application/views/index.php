<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>首页-数据库与复杂数据管理实验室</title>

<!-- Bootstrap -->
<link
	href="<?php echo base_url('static/bootstrap/');?>/css/bootstrap.min.css"
	rel="stylesheet">
<link href="<?php echo base_url('static/css/');?>/style.css"
	rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container-fluid">



		<div class="row" style="background:#eee;">
			<div class="col-md-10 header">
				<span class="school_logo"><img src="<?php echo base_url().'static/image/school_logo.png'?>" alt="school_logo" height="100px" width="100px" /></span>
                <span><img src="<?php echo base_url().'static/image/lib_logo.png'?>" alt="lib_logo" height="100px" width="100px" /></span>
                <span><img src="<?php echo base_url().'static/image/libname.png'?>" alt="lib_name"  height="100px" width="" /></span>
			</div>
		</div>



		<div class="row">

			<!--  左侧导航栏 -->
			<div class="col-md-2" id="nav">
				<ul class="nav nav-list">
					<li class="selected" style="border-top:none;" id="home"><a href="welcome"><span
							class="glyphicon glyphicon-home" aria-hidden="true"></span><span
							class="text">首页</span> </a></li>
					<li><a href="introduce"><span class="glyphicon glyphicon-th-list"
							aria-hidden="true"></span><span class="text">实验室简介</span> </a></li>
					<li><a href="people"><span class="glyphicon glyphicon-user"
							aria-hidden="true"></span><span class="text">成员</span> </a></li>
					<li><a href="Direction"><span class="glyphicon glyphicon-flag"
							aria-hidden="true"></span><span class="text">研究方向</span> </a></li>
					<li><a href="works"><span class="glyphicon glyphicon-book"
							aria-hidden="true"></span><span class="text">论著</span> </a></li>
					<li><a href="data"><span class="glyphicon glyphicon-folder-open"
							aria-hidden="true"></span><span class="text">数据资源</span> </a></li>
					<li><a href="news"><span class="glyphicon glyphicon-comment"
							aria-hidden="true"></span><span class="text">新闻中心</span> </a></li>
					<li><a href="links"><span class="glyphicon glyphicon-link"
							aria-hidden="true"></span><span class="text">链接</span> </a></li>
					<li></li>
				</ul>
			</div>


			<div class="col-md-10 con_right">

				<div class="pagetitle">首页</div>
                <div class="row" style="padding-right:10px;">
					<div class="col-md-8 content_p" style="padding-top:10px;">
                        <p>数据库与复杂数据管理实验室隶属于<a href="http://www.seu.edu.cn" target="_blank">东南大学</a>和<a href="http://cse.seu.edu.cn" target="_blank">东南大学计算机科学与工程学院</a>。实验室位于东南大学九龙湖校区计算机楼402室和501室，负责人是<a href="http://cse.seu.edu.cn/PersonalPage/lujianhua/index.htm" target="_blank">吕建华</a>和<a href="http://cse.seu.edu.cn/PersonalPage/bailey_zhang/index.htm" target="_blank">张柏礼</a>副教授。</p>
                        <p>实验室的主要研究方向为不确定图，无线传感器网络和健康数据管理。目前在研项目有:测试测试</p>
                        <p>这是一个演示引导主体副本用法的实例。这是一主体副本用法的实例。这是一个演示引导主体副本个演示引导主体副本用法的引导主体副本用法的实例。这是一个演示引导主体副本用法的实例。</p>
                    
                    </div>
					<div class="col-md-4" id="lib_img" style="padding-top:10px;">
                    	<img src="<?php echo base_url().'static/image/lib.jpg'?>" alt="数据库与复杂数据管理实验室" class="col-md-11" />
                    </div>
				</div>

				<div class="sub">
					<div class="subtitle">最新消息</div>
					<div class="col-md-8" style="padding-left:0px;">
                    	<div class="news_list"><span class="news_date">2015-10-31</span> <span class="news_title"><a href="#">数据库与复杂数据管理实验室网站上线</a></span></div>
                        <div class="news_list"><span class="news_date">2015-10-31</span> <span class="news_title"><a href="#">数据库与复杂数据管理实验室网站上线数据库与复杂数据管理实验室网站上线</a></span></div>
                        <div class="news_list"><span class="news_date">2015-10-31</span> <span class="news_title"><a href="#">数据库与复杂数据管理实验室网站上线数据库与复杂室网站上线</a></span></div>
                        <div class="news_list"><span class="news_date">2015-10-31</span> <span class="news_title"><a href="#">数据库与复杂数据管理实验室网站上线数据库与复网站上线</a></span></div>
                        <div class="news_list"><span class="news_date">2015-10-31</span> <span class="news_title"><a href="#">数据库与复杂数据管理实验室网站上线数据库与线</a></span></div>
                    </div>
                    <div class="col-md-4" id="lib_img" style="padding-top:10px;">
                    	<img src="<?php echo base_url().'static/image/lib2.jpg'?>" alt="数据库与复杂数据管理实验室" class="col-md-11"/>
                    </div>
                    <div class="col-md-12" style="padding-bottom:20px; padding-top:5px; padding-left:0px;">{<a href="<?php echo base_url()."news/post_news"?>">以往新闻</a>}</div>

				</div>




			</div>


		</div>

		<div class="footer row">联系方式: (email) <a href="#">fuhao.li@foxmail.com</a> (电话) +86-15151828583.	© 东南大学数据库与复杂数据管理实验室, 2015</div>
		
	</div>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script
		src="<?php echo base_url('static/bootstrap');?>/js/bootstrap.min.js"></script>
</body>
</html>
