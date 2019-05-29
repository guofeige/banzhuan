<?php
	$fp=fopen('./02.txt','a');//有此文件就直接打开,否则创建
	fwrite($fp,"李金涛");
	fclose($fp);
?>