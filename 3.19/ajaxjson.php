<?php
//echo "[{name:'test1',age:20},{name:'test2',age:21},{name:'test3',age:21}]";
//echo '[["zhangsan",20],["lisi",30]]';
var $arr=array("name"=>'lijiantao','age'=>8);

//echo $arr;
header('content-type:application/json;charset=utf-8');
echo json_encode($arr);
?>