<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>论著-数据库与复杂数据管理实验室</title>

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
					<li class="selected"><a href="works"><span class="glyphicon glyphicon-book" aria-hidden="true"></span><span class="text">论著</span></a></li>
					<li><a href="data"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span><span class="text">数据资源</span></a></li>
					<li><a href="news"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><span class="text">新闻中心</span></a></li>
					<li><a href="links"><span class="glyphicon glyphicon-link" aria-hidden="true"></span><span class="text">链接</span></a></li>
				</ul>
			</div>
            
            
			<div class="col-md-10 con_right">
				<div class="pagetitle">论著</div>
				<div class="row">
					<div class="col-md-12">
						[<a href="#teacher">2015</a>] [<a href="#master">2014</a>] {<a
							href="<?php echo base_url().'works/post_works';?>">2013</a> | <a href="<?php echo base_url().'works/post_works';?>">2012</a>}
					</div>
				</div>		
            
				<div class="sub">
					<div class="subtitle">2015</div>
					<div class="row">
                    	<div class="col-md-12 work_list">
							• 蔡伟, 张柏礼, 吕建华. 不确定图最可靠最大流算法研究[J]. 计算机学报, 2012, 35(11): 2371-2380.
						</div>
                        <div class="col-md-12 work_list">
							• 张柏礼, 吕建华, 姚蓓, 等. Web 代理服务器缓存置换算法研究[J]. 计算机科学与探索, 2010 (11): 977-983.
						</div>
                        <div class="col-md-12 work_list">
							• 魏巨巍, 吕建华, 张柏礼. 无线传感器网络中一种数据近似方法[J]. 计算机工程与科学, 2010, 32(11): 36-39.
						</div>
                        <div class="col-md-12 work_list">
							• 奚业雷, 吕建华, 张柏礼. 基于拓扑序列的 DAG 子图包含查询算法研究[J]. 计算机研究与发展, 2011 (S3): 343-349.
						</div>
                        <div class="col-md-12 work_list">
							• 张柏礼, 朱文, 吕建华. DAOA: 一种动态数据仓库聚集优化算法[J]. 现代电子技术, 2008, 31(10): 30-32.
						</div>
                        <div class="col-md-12 work_list">
							• 张柏礼, 吕建华, 生衍, 等. 一种不确定图中最可靠最大流问题的解决方案[J]. 计算机学报, 2014, 37(10): 2084-2095.
						</div>
                        
                    </div>
                    
                    <div style="padding-bottom:20px; padding-top:5px;">{<a href="works/post_works">以往论著</a>}</div>

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
