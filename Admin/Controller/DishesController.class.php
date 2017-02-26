<?php
namespace Admin\Controller;
use Think\Controller;
	class DishesController extends Controller{	
		function showlist1(){
		//1.实例化普通Model对象
			//$dishes = new \Model\DishesModel();
			//var_dump($dishes);
		//2.D函数实例化Model对象
		//实例化父类Model对象
			//$model=D();//new model
			//var_dump($model);//可用于只想原生sql语句
		//3.实例化父类model对象，同时操作数据表,没有Model模型类也可以操作
			//$user = D('User');
			//var_dump($user);
			$dishes = D('Dishes');
			var_dump($dishes);
		}
		function table(){
			$dishes = new \Model\DishesModel();
			$info =$dishes -> select();
			$this->assign('dlist',$info);
			$this->display();
		}
			function bianji($dishes_no){
			$dishes = new \Model\DishesModel();
			if (!empty($_POST)) {
				dump($_POST);
				$dishes->create();
				$z=$dishes->save();
				dump($z);
				if ($z) {
						$this->redirect('dui',array(),1,'编辑中...');
					}
					else{
						$this->redirect('bianji',array(),1,'编辑成功');
					}
			}else{
				$info=$dishes->select($dishes_no);
						$this->assign('dlist',$info);
						$this->display();
				}
		}
			function tianjia(){
				$dishes = new \Model\DishesModel();
				if (!empty($_POST)) {
					$arr = array(
					'DISHES_NO' =>$_POST['dishes_no'],
					'DISHES_NAME'=>$_POST['dishes_name'],
					'DISHES_PRICE'=>$_POST['dishes_price'],
					'DISHES_NUMBER'=>$_POST['dishes_number'],
					'DISHES_STYLE'=>$_POST['dishes_style'],
					);
				$z=$dishes->add($arr);
				if ($z) {
						$this->redirect('dui',array(),1,'正在添加...');
					}
					else{
						$this->redirect('tianjia',array(),1,'添加失败');
					}
				}else{
					$this ->display();
				}
			}

			function del($dishes_no){
				$dishes = D("dishes");
        //以下三种方式都可以删除数据
				$z = $dishes -> delete($dishes_no);       
				if ($z){
					$this->redirect('table',array(),1,'删除成功');
				}
				else{
					$this->redirect('dui',array(),1,'删除失败');
				}
			}

			function dui(){
				$this->display();
			}
	}