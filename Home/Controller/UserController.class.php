<?php
namespace Home\Controller;
use Think\Controller;
	/**
	* 
	*/
	class UserController extends Controller
	{
		
		function login()
		{
			//调用视图
			//访问此login.html
			$this->display();
			//访问Index下的index.html
			//$this->display('Index/index');
		}
	}