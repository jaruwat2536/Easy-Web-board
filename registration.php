<?
	require("condb.php");
	$email = $_POST["email"];
	$name = $_POST["username"];
	$password = $_POST["passwd"];
?>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?
	$qry_check=mysql_query("select * from user where email='".$email."' or name='".$name."'")
	if(mysql_num_rows($qry_check){
		echo 0;
	}
	else{
		$qry=mysql_query("insert into user (email,password,name,t_id) value ('$email','$password','$name',1)");
		echo 1;
	}
?>