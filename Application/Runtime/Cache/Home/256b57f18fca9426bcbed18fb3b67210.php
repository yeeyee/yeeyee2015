<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>易易网 分类信息平台</title>

<!-- <link rel="shortcut icon" href="/Public/Common/img/frame/yeeLogo.png" /> -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" type="text/css" href="/Public/Common/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Common/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Common/css/common.css" />
<link rel="stylesheet" type="text/css" href="/Public/About/css/about.css" />

<script type="text/javascript" src="/Public/Common/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/Common/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/Common/js/common.js"></script>
<script type="text/javascript" src="/Public/About/js/about.js"></script>
</head>

<body>

<!-- 页首InfoPlatform_header -->
<div id="InfoPlatform_header">
	<div id="logoBox">
		<a href="/"><img src="/Public/Common/img/frame/yeeLogo.png" alt="" />易易网</a>
	</div>
	<div id="searchBox">
		<form role="form">
			<input type="text" class="form-control" id="searchMe" placeholder="输入搜索项">
			<button type="submit" class="btn btn-default">搜索</button>
		</form>
	</div>
	<div id="userBox">
		<div id="signup">
			<a href="/Home/Signup">
				注册 <span class="glyphicon glyphicon-cloud-upload"></span>
			</a>
		</div>
		<div id="login">
			<a href="javascript:void(0)" data-toggle="modal" data-target="#userBox_loginBox">
				登录 <span class="glyphicon glyphicon-user"></span>
			</a>
		</div>
		<div id="username">
			<a href="javascript:void(0)" data-toggle="modal" data-target="#userBox_manageBox">
				<b>ljd2ede</b> <span class="glyphicon glyphicon-user"></span>
			</a>
		</div>
		<div id="userimg">
			<img src="/Public/Common/img/users/sdasds2x.jpg" alt="" />
		</div>
	</div>
</div>

<!-- 特殊，把modal提出来 -->
<!-- Modal -->
<div class="modal fade" id="userBox_loginBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form action="/Home/Login" method="post" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">用户登录</h4>
				</div>
				<div class="modal-body">
					<!--  -->
					
						<div class="input-group">
							<span class="input-group-addon">email地址</span>
							<input type="text" name="email" class="form-control" placeholder="Email">
						</div>
						<div class="input-group">
							<span class="input-group-addon">个人密码</span>
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
						<div class="input-group">
							<span class="input-group-addon"><a href="/Home/Login/findPassword/">忘记密码？</a></span>
						</div>
						<div class="alert alert-success" style="display:none;">
							<strong>恭喜!</strong> 成功登录。
						</div>
						<div class="alert alert-warning" style="display:none;">
							<strong>错误!</strong> 用户名或密码，请核实。
						</div>
					<!--  -->
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" >提交</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				</div>
			</div><!-- /.modal-content -->
		</form>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->
<div class="modal fade" id="userBox_manageBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form action="/Home/Login/logout" method="get" >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">用户设置</h4>
				</div>
				<div class="modal-body">
					<!--  -->
					<a href="/Home/setup">进入用户设置</a>
					<div class="alert alert-success" style="display:none;">
						 成功退出。
					</div>
					<div class="alert alert-warning" style="display:none;">
						 注销失败，请再试。
					</div>
					<!--  -->
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger" >注销</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				</div>
			</div><!-- /.modal-content -->
		</form>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ...特殊，把modal提出来 -->



<!-- 左半InfoPlatform_mainLeft -->
<div id="InfoPlatform_mainLeft">
	<div id="welcomePanel">
		<div class="title"><img src="/Public/Common/img/frame/yeeLogoB.png" alt="" /></div>
		<div class="text">关于易易 关于我们</div>
	</div>
</div>


<!-- 右半InfoPlatform_mainRight -->
<div id="InfoPlatform_mainRight">
	<div class="step" >
		<div class="title">易易网是什么？</div>
		<div class="text">
		◇ 现在的易易网是一个基于校园的分类信息平台。您可以在这里完成物品交易，发布或浏览兼职招聘信息、校园活动信息以及校园周边生活信息。<br />
		◇ 它提供了更好的信任度，更方便的信息平台，和更方便的交易方式。<br />
		<!-- ◇ 我们还计划在近期推出校友认证等功能。<br /> -->
		◇ 碎片化、本地化、移动化、社会化网络是我们探索的方向。<br />
		◇ 我们的使命是：易易，让交易更容易。
		</div>

		<div class="title">易易网曾经是什么？</div>
		<div class="text">
		◇ 易易网是3个大学生于互联网风起云涌，社会化、本地化、移动化趋势汹涌来袭的时代，抱着成为弄潮儿的决心而创立的。他们在2011年7月21日这个平凡日子里和友人四人决定了易易网的名字，成为易易网的始点。<br />
		◇ 随着师兄Aleksejevski的加入，易易网如虎添翼，奠定了易易网的技术基础。<br />
		◇ 我们借着1010计算机协会成立了易易工作室，我们得到很多有才的同学和师兄师弟师妹加入。<br />
		◇ 我们发布过征集版、alpha版、pre-beata版、beta1.0版、beta2.0到beta2.7.1.17版、beta3版，和最后的beta版。<br />
		◇ 我们贴海报、派传单、刷Q群，我们开讲座。<br />
		◇ 我们和有爱慈善商店、院会合作过，我们也参加比赛。<br />
		◇ 由于众所周知的原因，我们还是停下来了。<br />
		◇ 考研的，出国的，找工作的。
		</div>

		<div class="title">易易网现在是什么？</div>
		<div class="text">
		◇ 易易网现在是什么，说不清。<br />
		◇ 现在的易易网是我毕业论文的项目，采取ThinkPHP和MongoDB完全重构。<br />
		◇ 以前的易易网在这个网址 <a href="http://2011.yeeyee.net">http://2011.yeeyee.net</a> 可以访问到。<br />
		◇ 以前的数据暂不迁移过来了。<br />
		◇ 现在的易易网还是以实现当初要实现的功能为主。易易网还有很多很重要的功能未实现。
		</div>

		<div class="title">易易网将来是什么？</div>
		<div class="text">
		◇ 将来？<br />
		◇ 比解偏微分方程、描述高维空间里人的形状和做语文阅读题还复杂得多的问题。谁也不清楚。<br />
		<br />
		“有些事情，朦朦胧胧，一时看得清，一时看不清。<br />
		&nbsp;&nbsp;&nbsp;&nbsp;又或者好像去追寻一个未知的梦，<br />
		&nbsp;&nbsp;&nbsp;&nbsp;你只知道自己在追，很努力地在追，<br />
		&nbsp;&nbsp;&nbsp;&nbsp;但究竟在追逐着什么呢？<br />
		&nbsp;&nbsp;&nbsp;&nbsp;连自己都不知道。<br />
		&nbsp;&nbsp;&nbsp;&nbsp;但这种状态，正是最吸引人的存在。” ——PTJ《好奇先生》<br />
		</div>

		<div class="title">我想说</div>
		<div class="text">
		◇ 于我而言，易易网是个信念，是梦想的证据。<br />
		◇ 易易网也是一段经历，我从这段往事中学会很多本来根本学不到的东西，我也认识了很多人。<br />
		◇ 无论你们现在身在何方，你们是我见过的最厉害的中大人。我从你们身上看到你们的长处，看到自己的缺点。<br />
		◇ 谢谢你们:<br />
		 <b>FYears Johnny.R Jay.Yip Aleksejevski Vince.W Kevin.L Eva.L Gail.M Sea.Q Fordream Ldpe2G and so on.</b><br />
		<br />
		◇ 即使我们离梦想还很远，但愿我们坚持现在坚持努力也坚持梦想，终有一天，想要的必定来临。<br />
		◇ Best wishes to You.<br />
		◇ Best wishes to Who see this.<br />
		<br />
		◇ 猫 LJDe.de 于 2014-11-30<br />
		</div>
	</div>

</div>

<!-- 页尾InfoPlatform_footer -->
<div id="InfoPlatform_footer">
	<div id="aboutBox">
		<ul>
			<li><a href="/Home/About/aboutus">关于我们</a></li>
			<li><a href="/Home/About/tos">网站守约</a></li>
		</ul>
	</div>
	<div id="copyrightBox">©yeeyee.net 易易网 版权所有 Version <?php echo C('VERSION');?></div>
</div>

</body>

</html>