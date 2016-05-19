<?
	date_default_timezone_set("Asia/Bangkok");
	session_start();
	$email = $_SESSION["email"];
	$name = $_SESSION["name"];
	$t_id = $_SESSION["t_id"];
	if($email=="" || $name=="" || $t_id=="" ){
		?>
		<script type='text/javascript'>window.location.href = "index.php" </script>
		<?
	}
	require "condb.php";
?>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?
	$p_id = $_GET["id"];
	$c_date = date("Y-m-d H:i:s");
	$c_body = $_POST["comment"];
	
	mysql_query("insert into comment(c_body,c_datetime,email,p_id) value ('$c_body','$c_date','$email','$p_id')");
	
?>
<script type='text/javascript'>window.location.href = "board-body.php?id=<?echo $p_id ?>" </script>