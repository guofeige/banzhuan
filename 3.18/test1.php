<?php
$txt="php&a;sdlkfj";//变量
$txt=urlencode($txt);
//urlencode 对文本进行编码
//urldecode($str) 解编码
echo "<a href='./ajaxpost.php?tg=$txt'>是的</a>";
?>