<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo C('SYSTEM_NAME');?>- 登录</title>
<link href="/Public/modules/admin/login/css/login.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
<link href="/Public/modules/admin/login/css/demo.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/js/Validform/Validform_v5.3.2_min.js"></script>
<script>
$(function(){

$(".i-text").focus(function(){
$(this).addClass('h-light');
});

$(".i-text").focusout(function(){
$(this).removeClass('h-light');
});
$("#username").focus(function(){
 var username = $(this).val();
 if(username=='输入账号'){
 $(this).val('');
 }
});


$("#username").focusout(function(){
 var username = $(this).val();
 if(username==''){
 $(this).val('输入账号');
 }
});


$("#password").focus(function(){
 var username = $(this).val();
 if(username=='输入密码'){
 $(this).val('');
 }
});


$("#yzm").focus(function(){
 var username = $(this).val();
 if(username=='输入验证码'){
 $(this).val('');
 }
});

$("#yzm").focusout(function(){
 var username = $(this).val();
 if(username==''){
 $(this).val('输入验证码');
 }
});
$(".registerform").Validform({
	tiptype:function(msg,o,cssctl){
		var objtip=$(".error-box");
		cssctl(objtip,o.type);
		objtip.text(msg);
	},
	ajaxPost:false
});

});
</script>
</head>

<body style="background:url(/Public/modules/admin/login/images/00<?php echo rand(1,1);?>.jpg) no-repeat; background-size:cover;">
<div class="bg-dot"></div>
<div class="header">
  <h1 class="headerLogo"><?php echo C('system_name');?> - <span>用户登录</span></h1>
</div>
<div class="banner">
  <div class="login-aside">
    <div id="o-box-up"></div>
    <div id="o-box-down"  style="table-layout:fixed;">
      <div class="error-box"></div>
      <form class="registerform" method="post" action="<?php echo U('index/login');?>">
        <div class="fm-item">
          <label for="logonId" class="form-label">登录帐号：</label>
          <input type="text" value="输入账号" name="username" maxlength="100" id="username" class="i-text" datatype="s3-18" errormsg="用户名至少3个字符,最多18个字符！"  >
          <div class="ui-form-explain"></div>
        </div>
        <div class="fm-item">
          <label for="logonId" class="form-label">登陆密码：</label>
          <input type="password" value="" maxlength="100" name="password" id="password" class="i-text" datatype="*6-16" nullmsg="请输入密码！" errormsg="密码范围在6~16位之间！">
          <div class="ui-form-explain"></div>
        </div>
        <div class="fm-item pos-r">
          <label for="logonId" class="form-label">验证码</label>
          <input type="text" name="code" value="输入验证码" maxlength="100" id="yzm" class="i-text yzm" nullmsg="请输入验证码！" >
          <div class="ui-form-explain"><img id='code_img' class="yzm-img" onclick='this.src="<?php echo U('Api/verify',array('t'=>time()));?>"+"&"+Math.random()' src='<?php echo U('Api/verify',array('t'=>time()));?>' width="112" height="37"></div>
        </div>
        <div class="fm-item">
          <label for="logonId" class="form-label"></label>
          <input type="submit" value="" tabindex="4" id="send-btn" class="btn-login">
          <div class="ui-form-explain"></div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
