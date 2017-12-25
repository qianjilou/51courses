<?php
	//接收下载的文件，确定要下载哪一个文件
	$file = $_GET['file'];
	if($file==''){
		echo "不知道下载哪一个文件，要不你来";
		exit;
	}

	//读取文件的内容
	$full_name = 'img/'.$file;
	
	//可能会遇到中文乱码的情况，原因：文件所在的系统是windows系统，采用的是gbk编码
	//我们的php文件编码是utf-8编码，怎么解决呢？临时修改一下php的编码
	$full_name = iconv('utf-8', 'gbk', $full_name);


	$file_size = filesize($full_name);
	
	//告诉浏览器我向你回应的内容是文件请保存
	//返回的文件
	header("Content-type: application/octet-stream");
	//按照字节大小返回
	header("Accept-Ranges: bytes");
	//显示文件大小
	header("Content-Length: $file_size");
	//这里客户端的弹出对话框，对应的文件名
	header("Content-Disposition: attachment; filename=".$file);

	//读取文件资源
	$fp = fopen($full_name, 'r');
	//读取该文件资源的内容
	while(!feof($fp)){
		$data = fread($fp, 1024);
		echo $data;
	}
	fclose($fp);