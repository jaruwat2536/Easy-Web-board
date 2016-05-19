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
	$title = $_POST["usr"];
	$p_body = $_POST["comment"];
	$p_date = date("Y-m-d H:i:s");
	$title_id = $_POST["type"];
	
	
	mysql_query("insert into post(title,p_body,p_datetime,title_id,email) value ('$title','$p_body','$p_date',$title_id,'$email')");
	
	header("location:board.php");
?>