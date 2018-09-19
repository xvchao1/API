<?php
	//客户端发起API请求
	include './vendor/autoload.php';
	//请求的api地址
	$url='http://localhost/API/server/server.php';

	$curl = new Curl\Curl();
	$curl->get($url);
	if ($curl->error) {
	    echo $curl->error_code;
	}
	else {
	    echo $curl->response;
	}

	
 ?>