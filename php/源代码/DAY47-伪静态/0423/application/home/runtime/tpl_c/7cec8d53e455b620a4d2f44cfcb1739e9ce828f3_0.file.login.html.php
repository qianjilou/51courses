<?php
/* Smarty version 3.1.30, created on 2017-04-18 17:11:35
  from "D:\tnwamp\apache\htdocs\0418\application\home\view\user\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f5d8477fe122_29441756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cec8d53e455b620a4d2f44cfcb1739e9ce828f3' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0418\\application\\home\\view\\user\\login.html',
      1 => 1492506688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f5d8477fe122_29441756 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta content="IE=edge,Chrome=1" http-equiv="X-UA-Compatible">
	<meta content="webkit" name="renderer">
	<title>登录 - 有问必答</title>
	<meta content="有问必答,知识社区,社交社区,问答社区" name="keywords">
	<meta content="有问必答 社交化知识社区" name="description">
<link type="image/x-icon" rel="shortcut icon" href="<?php echo PUBLIC_PATH;?>
home/css/default/img/favicon.ico?v=20151125">

<link href="<?php echo PUBLIC_PATH;?>
home/css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="<?php echo PUBLIC_PATH;?>
home/css/icon.css" type="text/css" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="<?php echo PUBLIC_PATH;?>
home/css/default/common.css?v=20151125">
<link type="text/css" rel="stylesheet" href="<?php echo PUBLIC_PATH;?>
home/css/default/link.css?v=20151125">
<link type="text/css" rel="stylesheet" href="<?php echo PUBLIC_PATH;?>
home/js/plug_module/style.css?v=20151125">
<link type="text/css" rel="stylesheet" href="<?php echo PUBLIC_PATH;?>
home/css/default/login.css?v=20151125">

<?php echo '<script'; ?>
 type="text/javascript">
	var _BDC5955058AF5448FAEB7201057CD351="";
	var G_POST_HASH=_BDC5955058AF5448FAEB7201057CD351;
	var G_INDEX_SCRIPT = "?/";
	var G_SITE_NAME = "";
	var G_BASE_URL = "?";
	var G_STATIC_URL = "static";
	var G_UPLOAD_URL = "uploads";
	var G_USER_ID = "";
	var G_USER_NAME = "";
	var G_UPLOAD_ENABLE = "N";
	var G_UNREAD_NOTIFICATION = 0;
	var G_NOTIFICATION_INTERVAL = 100000;
	var G_CAN_CREATE_TOPIC = "";
	var G_ADVANCED_EDITOR_ENABLE = "Y";

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/jquery.2.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/jquery.form.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/plug_module/plug-in_module.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/aws.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/aw_template.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/app.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/md5.js?v=20151125"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo PUBLIC_PATH;?>
home/js/compatibility.js" type="text/javascript"><?php echo '</script'; ?>
>
<!--[if lte IE 8]>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PUBLIC_PATH;?>
home/js/respond.js"><?php echo '</script'; ?>
>
<![endif]-->
<style type="text/css">.fancybox-margin{margin-right:17px;}</style>
</head>

<body>
<noscript id="noscript" unselectable="on">
	<div class="aw-404 aw-404-wrap container">
		<img src="<?php echo PUBLIC_PATH;?>
common/no-js.jpg">
		<p>你的浏览器禁用了JavaScript, 请开启后刷新浏览器获得更好的体验!</p>
	</div>
</noscript>
<div id="wrapper">
	<div class="aw-login-box">
		<div class="mod-body clearfix">
			<div class="content pull-left">
				<h1 class="logo">
					<a href=""></a>
				</h1>
				<h2>有问必答</h2>
				<form action="?c=user&a=doLoginAction" method="post" id="login_form">
					
					<ul>
						<li>
							<input type="text" name="user_name" placeholder="邮箱 / 用户名" class="form-control" id="aw-login-user-name"></li>
						<li>
							<input type="password" name="password" placeholder="密码" class="form-control" id="aw-login-user-password"></li>
						<li class="alert alert-danger hide error_message"> <i class="icon icon-delete"></i> <em></em>
						</li>
						<li class="last">
							<input type="submit" value="登录" class="pull-right btn btn-large btn-primary">
							<label>
								<input type="checkbox" name="net_auto_login" value="1">记住我</label>
							<a href="forget_password.html">&nbsp;&nbsp;忘记密码</a>
						</li>
					</ul>
				</form>
			</div>
			<div class="side-bar pull-left"></div>
		</div>
		<div class="mod-footer">
			<span>还没有账号?</span>
			&nbsp;&nbsp;
			<a href="register.html">立即注册</a>
			&nbsp;&nbsp;•&nbsp;&nbsp;
			<a href="">游客访问</a>
		</div>
	</div>
</div>

<div class="aw-footer-wrap">
	<div class="aw-footer">
		Copyright &copy; 2016-2099, All Rights Reserved
		<span class="hidden-xs">
			Powered By
			<a target="blank" href="http://helloitbull.net/">有问必答 1.0</a>
		</span>

	</div>
</div>

</body>
</html><?php }
}
