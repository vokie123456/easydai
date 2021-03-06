<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"C:\wamp64\www\szdk/apps/home\view\customer\formSuccess.html";i:1500781524;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>个人信息</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/base.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/home.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/css/replaceBsc.css" />
	</head>

	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-6" style="text-align: center;">
						<p class="tip">欢迎来到宜信贷款张经理客户资料收集平台</a>
					</div>
					<div class="col-sm-6" style="text-align: center;">
						<p class="tip">网贷有风险，出借需谨慎！</p>
					</div>
				</div>
				<nav class="navbar navbar-default navbar-static-top">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            				<span class="sr-only">Toggle navigation</span>
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
          			</button>
						<a class="navbar-brand" href="../Index/index.html">个人贷款</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a href="../Index/index.html">首页</a>
							</li>
							<li class="active">
								<a href="form.html">客户资料提交</a>
							</li>
						</ul>
					</div>
					<!--/.nav-collapse -->
				</nav>
			</div>
		</header>

		<div class="main">
			<div class="container">
				<div class="main_top">
					<img src="__STATIC__/images/010.jpg" style="width: 100%;height: 400px;">
					<div class="container">
					</div>
				</div>
				<div class="main_bottom form_success_tip">
					<div class="tip">您的个人资料已经提交成功！页面将在<span id="sec">3</span>秒后跳转回首页，如果没有跳转点
						<a href="../Index/index.html">这里</a>。</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="footer">底部文字</div>
		</footer>

		<script src="__STATIC__/js/jquery-2.0.3.min.js"></script>
		<script src="__STATIC__/js/bootstrap.min.js"></script>

		<script language="javascript" type="text/javascript">
			var i = 3;
			var intervalid;
			intervalid = setInterval("fun()", 1000);

			function fun() {
				if(i == 0) {
					window.location.href = "../Index/index.html";
					clearInterval(intervalid);
				}
				document.getElementById("sec").innerHTML = i;
				i--;
			}
		</script>
	</body>

</html>