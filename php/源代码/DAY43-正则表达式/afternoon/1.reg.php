<?php
//1. 定义一套规则
$reg = '/a/';   //筛选的就是a

$reg = '/\w/';   //字母数字下划线范围中的任意1个
$reg = '/\d/';   //数字（0-9）范围中的任意1个
$reg = '/\s/';   //表示一个空格
$reg = '/\b/';   //表示一个字符边界

//[] 表示范围中的任意一个
$reg = '/[abc]/';   //abc三个字母中的任意1个
$reg = '/[^abc]/';   //除了abc三个字母之外的任意1个
$reg = '/[a-z]/';   //小写字母a-z范围中的任意1个

//. 表示除了换行(\n)符之外的任意1个字符
//| 表示或者

//中文范围：[\x{4e00}-\x{9fa5}]，前提是：需要先进行utf8编码
$reg = '//u';

//^  $，在[]外面使用，表示字符的开始、结束
//^ 表示开始的位置   $表示结束的位置
$reg = '/^[a-zA-Z]\w{5,9}$/'; //贪婪模式：尽可能多的匹配：最多匹配10个
$str = 'admin123456';   //到结束的地方11个，该用户就不符合我们的规则
preg_match($reg, $str,$match);
echo '<pre>';
var_dump($match);       //admin12345


//量词：约束匹配的字符的数量
// {5,10}  最少5个，最多10个
// {5,}    最少5个
// {5}     数量就是5个
// *       表示0个或多个
// +       至少1个
// ？       0个或1个



