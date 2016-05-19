<?
	session_start();
	require("condb.php");
	$email = $_POST["email"];
	$password = $_POST["passwd"];
	
	$qry=mysql_query("select * form user where email='$email' and password='$password'");
	if(mysql_num_rows($qry){
		$_SESSION["email"] = mysql_result($qry,0,"email");
		$_SESSION["name"] = mysql_result($qry,0,"name");
		$_SESSION["t_id"] = mysql_result($qry,0,"t_id");
		echo 1;
	}
	else{
		echo 0;
	}
?>