<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('admin/style/css/ch-ui.admin.css')}}">
	<link rel="stylesheet" href="{{asset('admin/style/font/css/font-awesome.min.css')}}">
	<!--滑块-->
	<link href="{{asset('admin/drag/css/drag.css')}}" rel="stylesheet" type="text/css">
	<script src="{{asset('admin/drag/js/jquery-1.7.2.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('admin/drag/js/drag.js')}}" type="text/javascript"></script>
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Blog</h1>
		<h2>欢迎使用博客管理平台</h2>
		<div class="form">
			@if(session('msg'))
				<p style="color:red">{{session('msg')}}</p>
			@endif
			<form action="#" method="post">
				{{csrf_field()}}
				<ul>
					<li>
					<input type="text" name="username" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="password" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					{{--<li>
						<input type="text" class="code" name="code"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="#" alt="">
					</li>--}}
					<li>
						<div id="drag" class="code"></div>
					</li>
					<li>
						<input type="submit" value="立即登陆" id="submit" disabled="true"  />
					</li>
				</ul>
			</form>
			<p><a href="#">返回首页</a> &copy; 2016 Powered by <a href="http://www.ljwit.com" target="_blank">http://www.ljwit.com</a></p>
		</div>
	</div>
</body>
<script type="text/javascript">
	$('#drag').drag();
</script>
</html>