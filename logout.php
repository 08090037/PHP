<?php

session_start();
//將session清空
unset($_SESSION["id"]);
echo '登出中......';
echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>'; //登出兩秒後回到輸入帳密頁面

?>