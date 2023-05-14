<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

if($_SESSION['username'] != null)
{
    unset($_SESSION['username']);
    echo '登出成功!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}
else
{
	echo '尚未登入!';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>
