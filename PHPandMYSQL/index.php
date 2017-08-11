<?php
	header("content-type:text/html;charset=utf-8");
	if($con=mysql_connect('localhost','root','')){echo "数据库连接成功了";}
	if(mysql_select_db('test')){
		echo "数据表连接成功了";
	}
	mysql_query('set name,birth,which utf8');
	//if(mysql_query('insert into test(name,birth) values("连旭静","2017.8.7")')){echo "数据插入连接成功了";}else{echo mysql_error();}
	mysql_close($con);

?>