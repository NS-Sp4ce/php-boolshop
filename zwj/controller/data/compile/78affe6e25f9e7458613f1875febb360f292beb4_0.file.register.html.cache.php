<?php
/* Smarty version 3.1.30, created on 2017-03-27 21:23:39
  from "D:\wamp\www\zwj\view\html\front\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d9125b9092c7_67738645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78affe6e25f9e7458613f1875febb360f292beb4' => 
    array (
      0 => 'D:\\wamp\\www\\zwj\\view\\html\\front\\register.html',
      1 => 1489333479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d9125b9092c7_67738645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2533358d9125b5964f6_68748826';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>boolshop-注册页面</title>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/jquery-3.1.0.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/header.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/ScrollToPlugin.min.js">
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/zwj/view/js/front/TweenMax.min.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="/zwj/view/css/front/header.css">
	<link rel="stylesheet" href="/zwj/view/css/front/reset.css">
	<link rel="stylesheet" href="/zwj/view/css/front/font-awesome.css">
	<style type="text/css">
	
	#form{
		margin:50px auto;
		overflow: hidden;
		width:530px;
		display: block;
	}
		#form>ul>li{
			overflow: hidden;
			margin:13px 0;
		}
		#form>ul>li>input{
				float: left;
				width:220px;
				height:30px;
		}	
		#form>ul>li>input:hover{
			cursor: text;
		}
		#form>ul>li>input#submit:hover{
			cursor: pointer;
		}
		#form>ul>li>span{
				width:90px;
				height:30px;
				line-height: 30px;
				font-size: 15px;
				text-align: right;
				float: left;
		}
		#form>ul>li>img{
			margin-top:7px;
			margin-left: 7px;
			float:left;
		}
		#form>ul>li>input#submit{
			color:white;
			font-size: 15px;
			float:static;
			margin-left:100px;
			outline:none;
			border:0;
			width:180px;
			background: rgb(197,0,0);
			border-radius: 4px;
		}
	
	</style>
	<?php echo '<script'; ?>
 type="text/javascript">
		
		$(function(){
				var reg=/^.+$/;
				var username_reg=/^([a-zA-Z]|[\u4E00-\u9FA5]){1}([a-zA-Z0-9]|[\u4E00-\u9FA5]|[_]){1,20}$/;
				var username_flag=false;
				var pwd_flag=false;
				var pwd_assure_flag=false;
				var telephone_flag=false;
				var email_flag=false;
				$('#reg_username').blur(function(){
					var username=$.trim($('#reg_username').val());
					if(!reg.test(username)){
						$(this).siblings().not("span:first").hide();
			 			$(this).next().next().show();
			 			$(this).next().next().next().show();
			 			username_flag=false;
				 	}else if(username_reg.test(username)){
				 		$(this).siblings().not("span:first").hide();
				 		$(this).next().show();
				 		username_flag=true;
				 	}else{
				 		$(this).siblings().not("span:first").hide();
			 			$(this).next().next().show();
			 			$(this).next().next().next().next().show();
			 			username_flag=false;
				 	}
			
				});
				$('#pwd').blur(function(){
				
					var pwd=$.trim($('#pwd').val());
					var pwd_reg_low=/^(?:\d){6,20}$|[a-zA-Z]{6,20}$|[?,.:;'"~!@#$%^&*]{6,20}$/;
					var pwd_reg_middle=/^(?!\d+$)(?![a-zA-Z]+$)(?![@#$%^&?,.;:"'~]+$)([a-zA-Z\d]{6,20}|[@#$%^&?,.;:"'~\d]{6,20}|[a-zA-Z@#$%^&?,.;:"'~]{6,20})$/;
					var pwd_reg_high=/^(?![a-zA-z]+$)(?!\d+$)(?![!@#$%^&*?,.;:'"~]+$)(?![a-zA-z\d]+$)(?![a-zA-z!@#$%^&*?,.;:'"~]+$)(?![\d!@#$%^&*?,.;:'"~]+$)[a-zA-Z\d!@#$%^&*?,.;:'"~]{6,20}$/;
					if(!(username_flag==true)){

					}
					else if(!reg.test(pwd)){
						$(this).siblings().not("span:first").hide();
						$(this).next().next().next().next().show();
						$(this).next().next().next().next().next().next().show();
						pwd_flag=false;
				 	}else if(pwd_reg_low.test(pwd)){
				 		$(this).siblings().not("span:first").hide();
						$(this).next().show();
			 			$(this).next().next().show();
			 			$(this).next().next().next().html('弱');
			 			$(this).next().next().next().show();
			 			pwd_flag=true;
				 	}else if(pwd_reg_middle.test(pwd)){
				 		$(this).siblings().not("span:first").hide();
						$(this).next().show();
			 			$(this).next().next().show();
			 			$(this).next().next().next().html('中');
			 			$(this).next().next().next().show();
			 			pwd_flag=true;
				 	}else if(pwd_reg_high.test(pwd)){
				 		$(this).siblings().not("span:first").hide();
						$(this).next().show();
			 			$(this).next().next().show();
			 			$(this).next().next().next().html('强');
			 			$(this).next().next().next().show();
			 			pwd_flag=true;
				 	}else{
				 		$(this).siblings().not("span:first").hide();
						$(this).next().next().next().next().show();
			 			$(this).next().next().next().next().next().show();
			 			pwd_flag=false;
				 	}
				 
				});
				$('#pwd_assure').blur(function(){
		
					var pwd_assure=$.trim($('#pwd_assure').val());
					var pwd=$.trim($('#pwd').val());
					if(!(username_flag==true&&pwd_flag==true))
					{

					}
					else if(!reg.test(pwd_assure)){
						$(this).siblings().not("span:first").hide();
						$(this).next().next().next().next().show();
			 			$(this).next().next().next().next().next().show();
			 			pwd_assure_flag=false;
					}else if(pwd==pwd_assure){
						$(this).siblings().not("span:first").hide();
						$(this).next().show();
						pwd_assure_flag=true;
					}else{
						$(this).siblings().not("span:first").hide();
						$(this).next().next().show();
			 			$(this).next().next().next().show();
			 			pwd_assure_flag=false;
					}
				
				});
				$('#reg_telephone').blur(function(){
					
					var telephone=$.trim($('#reg_telephone').val());
					var ph_reg = /^[1][345789]\d{9}$/;
					if(!(username_flag==true&&pwd_flag==true&&pwd_assure_flag==true)){

					}
					else if(!reg.test(telephone)){
						$(this).siblings().not("span:first").hide();
						$(this).next().next().show();
			 			$(this).next().next().next().show();
			 			telephone_flag=false;
			 		}else if(!ph_reg.test(telephone)){
			 			$(this).siblings().not("span:first").hide();
						$(this).next().next().next().next().show();
			 			$(this).next().next().next().next().next().show();
			 			telephone_flag=false;
			 		}else{
			 			$(this).siblings().not("span:first").hide();
						$(this).next().show();
						telephone_flag=true;
			 		}
			 	
				});
				$('#reg_email').blur(function(){
					
						var email=$.trim($('#reg_email').val());
						var em_reg=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
						if(!(username_flag==true&&pwd_flag==true&&pwd_assure_flag==true&&telephone_flag==true)){

						}
						else if(!reg.test(email)){
						$(this).siblings().not("span:first").hide();
						$(this).next().next().show();
			 			$(this).next().next().next().show();
			 			email_flag=false;
			 		}else if(!em_reg.test(email)){
			 			$(this).siblings().not("span:first").hide();
						$(this).next().next().next().next().show();
			 			$(this).next().next().next().next().next().show();
			 			email_flag=false;
			 		}else{
			 			$(this).siblings().not("span:first").hide();
						$(this).next().show();
							email_flag=true;
			 		}
			 	
				});
				$('#form').submit(function(e){
					var security_question=$('#security_question').val();
					var security_answer=$('#security_answer').val();
					if($.trim(security_question)=='0'){
						alert('请选择密保问题');
						e.preventDefault();
					}else if($.trim(security_answer)==''){
						alert('请填写密保问题');
						e.preventDefault();
					}

					if(username_flag==true&&pwd_flag==true&&pwd_assure_flag==true&&telephone_flag==true&&email_flag==true){

					}else{
						e.preventDefault();
					}


			 		
			});
		})
	
	<?php echo '</script'; ?>
>
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<form action="registerAct.php" method="post" enctype="multipart/form-data" id="form" >
		<ul>
			<li>
				<span>会员名：</span><input type="text" name="customer_name" id="reg_username" >
				<img src="/zwj/view/images/front/同意.png" alt="" style="display:none;">
				<img src="/zwj/view/images/front/关闭.png" alt="" style="display:none;"><span style="color:#f00;display:none;margin-left:7px;">请输入会员名</span>
				<span style="color:#f00;width:150px;display:none;margin-left:-26px;">会员名格式不规范</span>
			</li>
			<li>
				<span>密码：</span><input type="password" name="password" id="pwd">
				<img src="/zwj/view/images/front/同意.png" alt="" style="display:none;"><span style="width:53px;display:none;">强度：</span><span style="width:16px;color:rgb(255,125,27);display:none;">中</span>
				<img src="/zwj/view/images/front/关闭.png" alt="" style="display:none;"><span style="width:150px;color:#f00;display:none;margin-left:-7px;">密码设置不符合要求</span>
				<span style="color:#f00;display:none;width:120px;margin-left:-38px;">请输入密码</span>
			</li>
			<li>
				<span>确认密码：</span><input type="password" name="pwd_assure" id="pwd_assure">
				<img src="/zwj/view/images/front/同意.png" alt="" style="display:none;">
				<img src="/zwj/view/images/front/关闭.png" alt="" style="display:none;"><span style="color:#f00;display:none;width:180px;margin-left:-38px;">两次密码输入不一致</span>
				<img src="/zwj/view/images/front/提示.png" alt="" style="display:none;"><span style="width:130px;display:none;margin-left:-20px;">请再次输入密码</span>
			</li>
			<li>
				<span>手机号：</span><input type="text" name="telephone" id="reg_telephone">
				<img src="/zwj/view/images/front/同意.png" alt="" style="display:none;">
				<img src="/zwj/view/images/front/关闭.png" alt="" style="display:none;"><span style="color:#f00;display:none;margin-left:7px;">请输入手机号</span>
				<img src="/zwj/view/images/front/关闭.png" alt="" style="display:none;"><span style="color:#f00;width:180px;display:none;margin-left:-53px;">手机号格式不规范</span>
			</li>
			<li>
				<span>电子邮箱：</span><input type="text" name="email" id="reg_email">
				<img src="/zwj/view/images/front/同意.png" alt="" style="display:none;">
				<img src="/zwj/view/images/front/关闭.png" alt="" style="display:none;"><span style="color:#f00;display:none;">请输入email</span>
				<img src="/zwj/view/images/front/关闭.png" alt="" style="display:none;"><span style="color:#f00;width:150px;display:none;margin-left:-30px;">email格式不规范</span>
			</li>
			<li><span>密保问题：</span><select style="height:33px;" name="security_question" id="security_question">
				<option value="0">请选择密码问题</option>
				<option value="1">我最好朋友的生日？</option>
				<option value="2">我的座右铭？</option>
				<option value="3">我最喜爱的电影？</option>
				<option value="4">我的学号是？</option>
				<option value="5">我最喜爱的小说？</option>
				<option value="6">我最喜爱的动物？</option>
				<option value="7">我的生日？</option>
			</select></li>
			<li><span>密保答案:</span><input type="text" name="security_answer" id="security_answer">

			</li>
			<li>
				<input type="submit" id="submit" value="提交">
			</li>
		</ul>
	</form>
</body>
</html><?php }
}
