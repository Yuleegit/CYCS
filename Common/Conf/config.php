<?php
header("Content-type:text/html;charset=utf-8");
return array(
	//'配置项'=>'配置值'
	//页面底端显示跟踪信息
	'SHOW_PAGE_TRACE'	=>true,
	//默认分组设置
	'DEFAULT_MODULE'	=>'Home',//默认模块
	'MODULE_ALLOW_LIST'	=>array('Home','Admin'),//定向可用分组
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_NAME'               =>  'bishe',          // 数据库名
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    /*
    'DB_HOST'               =>  'sqld.bcehost.com', //云主机地址
    'DB_NAME'               =>  'aiCCmLJShDbhtJrdFMoD',// 云数据库名
    'DB_USER'               =>  'c19734f61bc44708b9a145816b585e6c',   //云主机数据库用户名
    'DB_PWD'                =>  'bad6ef74432f4e7bb6efa8e099cdad74',          //云数据库密码
*/
    // 'DB_HOST'               =>  'bdm257941499.my3w.com', //阿里云云主机地址
    // 'DB_NAME'               =>  'bdm257941499_db',// 云数据库名
    // 'DB_USER'               =>  'bdm257941499',   //云主机数据库用户名
    // 'DB_PWD'                =>  'PASS6580',          //云数据库密码

    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'cy_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
);