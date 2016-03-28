<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>数据资源-数据库与复杂数据管理实验室</title>

<!-- Bootstrap -->
<link
	href="<?php echo base_url('static/bootstrap/');?>/css/bootstrap.min.css"
	rel="stylesheet">
<link
	href="<?php echo base_url('static/css/');?>/style.css"
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
					<li><a href="welcome"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><span class="text">首页</span></a></li>
					<li><a href="introduce"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span><span class="text">实验室简介</span></a></li>
					<li><a href="people"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="text">成员</span></a></li>
					<li><a href="Direction"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span><span class="text">研究方向</span></a></li>
					<li><a href="works"><span class="glyphicon glyphicon-book" aria-hidden="true"></span><span class="text">论著</span></a></li>
					<li class="selected"><a href="data"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span><span class="text">数据资源</span></a></li>
					<li><a href="news"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><span class="text">新闻中心</span></a></li>
					<li><a href="links"><span class="glyphicon glyphicon-link" aria-hidden="true"></span><span class="text">链接</span></a></li>
				</ul>
			</div>
            
            
			<div class="col-md-10 con_right">
					<div class="pagetitle">数据资源</div>
				<div class="row">
					<div class="col-md-12">
						[<a href="#teacher">程序</a>] [<a href="#master">数据</a>] 
					</div>
				</div>			
            
            	<div class="sub">
					<div class="subtitle">数据</div>
                    <div style="padding-bottom:20px; padding-top:5px;">{<a href="#">暂无数据</a>}</div>

				</div>
                
                <div class="sub">
					<div class="subtitle">程序</div>
                    
                    <div style="padding-bottom:20px; padding-top:5px;">{<a href="#">暂无程序</a>}</div>

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
