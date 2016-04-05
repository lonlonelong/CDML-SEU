<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>成员-数据库与复杂数据管理实验室</title>

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
					<li><a href="<?php echo base_url().'welcome';?>"><span class="glyphicon glyphicon-home"
							aria-hidden="true"></span><span class="text">首页</span> </a></li>
					<li><a href="<?php echo base_url().'introduce';?>"><span class="glyphicon glyphicon-th-list"
							aria-hidden="true"></span><span class="text">实验室简介</span> </a></li>
					<li class="selected"><a href="<?php echo base_url().'people';?>"><span
							class="glyphicon glyphicon-user" aria-hidden="true"></span><span
							class="text">成员</span> </a></li>
					<li><a href="<?php echo base_url().'Direction';?>"><span class="glyphicon glyphicon-flag"
							aria-hidden="true"></span><span class="text">研究方向</span> </a></li>
					<li><a href="<?php echo base_url().'works';?>"><span class="glyphicon glyphicon-book"
							aria-hidden="true"></span><span class="text">论著</span> </a></li>
					<li><a href="<?php echo base_url().'data';?>"><span class="glyphicon glyphicon-folder-open"
							aria-hidden="true"></span><span class="text">数据资源</span> </a></li>
					<li><a href="<?php echo base_url().'news';?>"><span class="glyphicon glyphicon-comment"
							aria-hidden="true"></span><span class="text">新闻中心</span> </a></li>
					<li><a href="<?php echo base_url().'links';?>"><span class="glyphicon glyphicon-link"
							aria-hidden="true"></span><span class="text">链接</span> </a></li>
				</ul>
			</div>


			<div class="col-md-10 con_right">

				<div class="pagetitle">成员</div>
				<div class="row">
					<div class="col-md-12">
						[<a href="#teacher">教师</a>] [<a href="#master">研究生</a>] {<a
							href="<?php echo base_url().'people/previous_people';?>">以往研究生</a>}
					</div>
				</div>


				<div class="sub">
					<div class="subtitle">
						教师<a class="headeranchor" id="teacher" href="#teacher"
							title="Link to this Section">¶</a>
					</div>
					<div>(按姓氏拼音排序)</div>
					<div class="row">
						<div class="col-md-3 people">
							• <a
								href="http://cse.seu.edu.cn/PersonalPage/lujianhua/index.htm"
								target="_blank">吕建华</a>-博士,副教授
						</div>
						<div class="col-md-3 people">
							• <a
								href="http://cse.seu.edu.cn/PersonalPage/bailey_zhang/index.htm"
								target="_blank">张柏礼</a>-博士,副教授
						</div>
					</div>
				</div>


				<div class="sub">
					<div class="subtitle" id="master">
						研究生<a class="headeranchor" id="master" href="master"
							title="Link to this Section">¶</a>
					</div>
					<div>(按年级、拼音排序)</div>
					<div class="row">
						<div class="col-md-3 people">
							• <a href="person/lifuhao" target="_blank">李富豪</a>2013-
						</div>
						<div class="col-md-3 people">
							• <a href="person/chenhu" target="_blank">陈虎</a>2013-
						</div>
						<div class="col-md-3 people">
							• <a href="person/wangyuanyuan" target="_blank">王媛媛</a>2013-
						</div>
						<div class="col-md-3 people">
							• <a href="person/zhaolei" target="_blank">赵磊</a>2013-
						</div>
						<div class="col-md-3 people">
							• <a href="person/qiancuicui" target="_blank">钱翠翠</a>2013-
						</div>
						<div class="col-md-3 people">
							• <a href="person/ligen" target="_blank">李根</a>2014-
						</div>
						<div class="col-md-3 people">
							• <a href="person/guifei" target="_blank">郭菲</a>2014-
						</div>
						<div class="col-md-3 people">
							• <a href="person/wangxueyan" target="_blank">王雪龑</a>2014-
						</div>
						<div class="col-md-3 people">
							• <a href="person/zhangdeyun" target="_blank">张德云</a>2014-
						</div>
						<div class="col-md-3 people">
							• <a href="person/lichengyang" target="_blank">李成洋</a>2014-
						</div>
						<div class="col-md-3 people">
							• <a href="person/masipei" target="_blank">马斯霈</a>2015-
						</div>
						<div class="col-md-3 people">
							• <a href="person/wanghui" target="_blank">王辉</a>2015-
						</div>
						<div class="col-md-3 people">
							• <a href="person/liutong" target="_blank">刘彤</a>2015-
						</div>
						<div class="col-md-3 people">
							• <a href="person/yaomengxue" target="_blank">姚梦雪</a>2015-
						</div>



					</div>
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
