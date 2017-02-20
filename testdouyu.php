<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
<script src="jquery-1.5.2.min.js"></script>
<script src="ajax.js"></script>
</head>

<body>
	test
</body>
</html>
<script type="text/javascript">
$.ajax({
	type : "post",
	url : "https://www.douyu.com/member/cp/modify_username",
	dataType : "jsonp",
	jsonp: "callback",
	jsonpCallback:"success_jsonpCallback",
	success : function(json){
		alert('success');
	},
	error:function(msg){
		console.log(msg);
		alert('fail');
	}
});
</script>