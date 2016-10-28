<?php
$username="tuyen.px";
$servername="107.113.168.159";
$password="tuyen";
$databasename="employee";
$tablename="login";
// Open connection :
$connection =  mysql_connect($servername, $username, $password,$databasename) or die('Can not connect to Database'); 
$query ="SELECT * FROM employee.login";
// process query command :
$result = mysql_query($query) or die("can not query database");
$listUser =array();
$listUser = mysql_fetch_row ($result );
echo "co tat ca ".count($listUser)." user";
mysql_close($connection);
?>




        
