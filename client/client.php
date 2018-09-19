<?php
	
	//客户端发起api请求
	include  './vendor/autoload.php';
	include 'setsing.php';

	//定义秘钥
	$token = 'test';
	//生成一个加密签名
	$sing = setsing($token);



	//请求的api地址
	$url = 'http://localhost/ruanjian_02/api/server/server.php?sing='.$sing;
	echo $url;
	$curl = new Curl\Curl();
	$curl->post($url, array(
	   	'username'=>'xuanqiyan',
	    'password'=>'123'
	));

	if ($curl->error) {
	    echo $curl->error_code;
	}
	else {
	    echo $curl->response;
	}

	
	



?>