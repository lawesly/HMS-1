<?php

	/*设置文档类型和编码方式*/
	header('Content-Type:text/json;charset=utf-8');
	/*引入公共方法库*/
	require 'E:/wamp/www/HMS/API/util/common.php';

	/*获取首页轮播图*/
	$res=$_mysqli->db_query_all('select * from carousel_manage where cm_isDel=0');
	echo formatJson($res);

?>