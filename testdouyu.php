<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
<script src="jquery-1.5.2.min.js"></script>
<script src="ajax.js"></script>
</head>

<body>
</body>
</html>
 ajax.js

$.ajax({
	type : "post",
	url : "ajax.php",
	dataType : "jsonp",
	jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
	jsonpCallback:"success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
	success : function(json){
		alert('success');
	},
	error:function(){
		alert('fail');
	}
});
 ajax.php

<?php 

$data = ".......";
$callback = $_GET['callback'];
echo $callback.'('.json_encode($data).')';
exit;

?>