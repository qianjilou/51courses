<?php
/* Smarty version 3.1.30, created on 2017-04-23 16:33:12
  from "D:\tnwamp\apache\htdocs\0423\application\home\view\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fc66c8f20c06_25399535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aa3b637ac3bf1cd61573be59b5aaa2e3ba25952' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0423\\application\\home\\view\\layout.html',
      1 => 1492936366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fc66c8f20c06_25399535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html class="">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta content="IE=edge,Chrome=1" http-equiv="X-UA-Compatible">
	<meta content="webkit" name="renderer">
	<title>发现 - 有问必答</title>
	<meta content="有问必答,知识社区,社交社区,问答社区" name="keywords">
	<meta content="有问必答 社交化知识社区" name="description">
	<base href="">
	<!--[if IE]>
</base>
<![endif]-->
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

<?php echo '<script'; ?>
 type="text/javascript">
	var _90DB43ABD4D2EFB80B143A0DF5B3B668="18C84670BD4E0E36";
	var G_POST_HASH=_90DB43ABD4D2EFB80B143A0DF5B3B668;
	var G_INDEX_SCRIPT = "?/";
	var G_SITE_NAME = "WeCenter";
	var G_BASE_URL = "";
	var G_STATIC_URL = "static";
	var G_UPLOAD_URL = "uploads";
	var G_USER_ID = "1";
	var G_USER_NAME = "itbull";
	var G_UPLOAD_ENABLE = "Y";
	var G_UNREAD_NOTIFICATION = 0;
	var G_NOTIFICATION_INTERVAL = 100000;
	var G_CAN_CREATE_TOPIC = "1";
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
home/common/no-js.jpg">
		<p>你的浏览器禁用了JavaScript, 请开启后刷新浏览器获得更好的体验!</p>
	</div>
</noscript>

<div class="aw-top-menu-wrap">
	<div class="container">
		<!-- logo -->
		<div class="aw-logo hidden-xs">
			<a href=""></a>
		</div>
		<!-- end logo -->
		<!-- 搜索框 -->
		<div class="aw-search-box  hidden-xs hidden-sm">
			<form method="post" id="global_search_form" action="?/search/" class="navbar-search">
				<input type="text" id="aw-search-query" name="q" autocomplete="off" placeholder="搜索问题、话题或人" class="form-control search-query">
				<span onclick="$('#global_search_form').submit();" id="global_search_btns" title="搜索"> <i class="icon icon-search"></i>
				</span>
				<div class="aw-dropdown">
					<div class="mod-body">
						<p class="title">输入关键字进行搜索</p>
						<ul class="aw-dropdown-list hide"></ul>
						<p class="search">
							<span>搜索:</span>
							<a onclick="$('#global_search_form').submit();"></a>
						</p>
					</div>
					<div class="mod-footer">
						<a class="pull-right btn btn-mini btn-success publish" onclick="" href="publish.html">发起问题</a>
					</div>
				</div>
			</form>
		</div>
		<!-- end 搜索框 -->
		<!-- 导航 -->
		<div class="aw-top-nav navbar">
			<div class="navbar-header">
				<button class="navbar-toggle pull-left">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<ul class="nav navbar-nav">
					<li>
						<a class="active" href="index.html"> <i class="icon icon-list"></i>
							发现
						</a>
					</li>
					<li>
						<a href="topic_index.html">
							<i class="icon icon-topic"></i>
							话题
						</a>
					</li>
					<li>
						<a style="font-weight:bold;">· · ·</a>
						<div class="dropdown-list pull-right">
							<ul id="extensions-nav-list"></ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		<!-- end 导航 -->
		<!-- 未登录展示 -->
		<?php if (!isset($_SESSION['user'])) {?>
		<div class="aw-user-nav">
			<!-- 登陆&注册栏 -->
			<a href="login.html" class="login btn btn-normal btn-primary">登录</a>
			<a href="register.html" class="register btn btn-normal btn-success">注册</a>
			<!-- end 登陆&注册栏 -->
		</div>
		<?php } else { ?>
		<!-- 登陆成功展示用户栏 -->
		<div class="aw-user-nav">
			<!-- 登陆&注册栏 -->
			<a class="aw-user-nav-dropdown" href="people.html">
				<img src="<?php echo PUBLIC_PATH;?>
common/avatar-mid-img.png" alt="itbull"></a>
			<div class="aw-dropdown dropdown-list pull-right">
				<ul class="aw-dropdown-list">
					<li class="hidden-xs">
						<a href="user_set.html">
							<i class="icon icon-setting"></i>
							设置
						</a>
					</li>
					<li class="hidden-xs">
						<a href="admin/login.html">
							<i class="icon icon-job"></i>
							管理
						</a>
					</li>
					<li>
						<a href="?c=user&a=logoutAction">
							<i class="icon icon-logout"></i>
							退出
						</a>
					</li>
				</ul>
			</div>
			<!-- end 登陆&注册栏 -->
		</div>
		<?php }?>
		<!-- end 用户栏 -->
		<!-- 发起 -->
		<div class="aw-publish-btn">

			<a onclick="AWS.dialog('publish', {'category_enable':'1', 'category_id':'0', 'topic_title':''}); return false;" href="?/publish/" class="btn-primary" id="header_publish">
				<i class="icon icon-ask"></i>
				发起
			</a>
			<div class="dropdown-list pull-right">
				<ul>
					<li>
						<a onclick="" href="<?php echo framework\core\Factory::U('home/question/add');?>
">问题</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- end 发起 -->
	</div>
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1956858fc66c8f1b284_01340761', "content");
?>

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
/* {block "content"} */
class Block_1956858fc66c8f1b284_01340761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
