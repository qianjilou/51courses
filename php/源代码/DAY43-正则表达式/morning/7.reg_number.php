<?php
//1. 定义规则
$reg = '/.{5}/';    //除了换行符之外的5个字符
$reg = '/.{5,10}/'; //除了换行之外的字符，数量是最少5个最多要10个
$reg = '/.{5,}/';   //除了换行符之外的字符，数量最少5个

//2. * + ？
$reg = '/.*/';      // * 表示0个或多个
$reg = '/.+/';      // + 表示至少1个  
$reg = '/.?/';      // ? 表示0个或1个

//2. 运来一车沙子做实验
$str = 'helloworld';


//3. 找来一些工人筛沙子
preg_match_all($reg, $str,$match);
echo '<pre>';
var_dump($match);