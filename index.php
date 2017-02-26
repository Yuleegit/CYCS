<?php
//框架两种模式
//调试模式
define('APP_DEBUG',true);
//生产模式（默认）
//define('APP_DEBUG', false);
//给静态资源文件访问目录设置常量，方便后期维护
define('CSS_URL','/CYCS/Public/CSS/');
define('IMG_URL','/CYCS/Public/img/');
define('JS_URL','/CYCS/Public/JS/');
//入口文件
include('../ThinkPHP/ThinkPHP.php');

