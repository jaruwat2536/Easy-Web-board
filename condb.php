<?
	$host = "localhost";
	$username = "root";
	$password = "123456";
	
	mysql_connect($host, $username, $password) or die ("Connection failed.");
	mysql_select_db("easywebboard");
	mysql_query("set character set utf8"); 
?>