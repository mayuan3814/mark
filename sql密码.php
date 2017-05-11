<?php
$host="bdm279265457.my3w.com";
$username="bdm279265457";
$password="mayuan3811";
$conn=mysql_connect($host,$username,$password);

//判断
if (!$conn) {
  die('连接数据库失败: ' . mysql_error());
  }

echo "mysql 连接成功！";
mysql_close($conn);
?>
