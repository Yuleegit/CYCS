<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo CSS_URL?>bootstrap.css">
	<link rel="stylesheet" href="<?php echo CSS_URL?>font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo CSS_URL?>Mycss/nav.css">
	<script src="<?php echo JS_URL?>jquery-3.1.1.min.js"></script>
	<script src="<?php echo JS_URL?>bootstrap.min.js"></script>
	<title>餐饮后台管理系统</title>
   <style>
   .col-xs-2{
      margin-top: 7px;
   }
   .form-control{
      margin-left: -13px;
   }
   .btn-primary{
      margin-top: 17px;
   }
   </style>
</head>
<body>
<div>
   <form class="form-horizontal" role="form" action="<?php echo U('Dishes/tianjia');?>" method="post" enctype="multipart/form-data">
       <div class="form-group">
      <label for="No" class="col-sm-2 col-xs-2 control-label">编号</label>
   <div class="col-sm-10 col-xs-10">
         <input type="text" class="form-control" name="dishes_no" id="No">
   </div>
   </div>
   <div class="form-group">
      <label for="name" class="col-sm-2 col-xs-2 control-label">菜名</label>
      <div class="col-sm-10 col-xs-10">
         <input type="text" class="form-control" name="dishes_name" id="name">
      </div>
   </div>
   <div class="form-group">
      <label for="price" class="col-sm-2 col-xs-2 control-label">单价</label>
      <div class="col-sm-10 col-xs-10">
         <input type="text" class="form-control" name="dishes_price" id="price">
      </div>
   </div>
      <div class="form-group">
      <label for="number" class="col-sm-2 col-xs-2 control-label">已售</label>
      <div class="col-sm-10 col-xs-10">
         <input type="text" class="form-control" name="dishes_number" id="number">
      </div>
   </div>
   <div class="form-group">
      <label for="style" class="col-sm-2 col-xs-2 control-label">菜系</label>
      <div class="col-sm-10 col-xs-10">
         <input type="text" class="form-control" name="dishes_style" id="style">
      </div>
   </div>
    <div align="center">
    <input type="submit" value="确认添加" class="btn btn-primary"/>
   </div>
 </form>
 </div>
</body>
</html>