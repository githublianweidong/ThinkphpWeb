<?php
namespace Admin\Controller;
class ApiController
{
	public function verify()
	{	
	   $config =    array(
		'fontSize'    =>    30,    // 验证码字体大小
		'length'      =>    4,     // 验证码位数
		//'useNoise'    =>    false, // 关闭验证码杂点	
		);		
		$Verify =     new \Think\Verify($config);
		$Verify->fontttf = '5.ttf';
		$Verify->entry();
	}
}
