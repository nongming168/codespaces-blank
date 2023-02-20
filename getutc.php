<?php 

	$time = time();
    
    date_default_timezone_set('GMT');
    $time = time();
	
    echo  "{\"code\":0,\"data\":$time,\"msg\":\"success\"}"  ;
	
	//输出结果例子 {"code":0,"data":1669495793,"msg":"success"}     数字1669495793表示为动态当前的时间戳
?> 