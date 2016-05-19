<?
	date_default_timezone_set("Asia/Bangkok");
	session_start();
	$email = $_SESSION["email"];
	$name = $_SESSION["name"];
	$t_id = $_SESSION["t_id"];
	if($email=="" || $name=="" || $t_id=="" ){
		header("location:index.php");
	}
	require "condb.php";
?>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?
	$title = $_POST["usr"];
	$p_body = $_POST["comment"];
	$p_date = date("Y-m-d H:i:s");
	$title_id = $_POST["type"];
	$p_id = $_GET["id"];
	
	
	mysql_query("update post set title='$title',p_body='$p_body',p_datetime='$p_date',title_id=$title_id,email='$email' where p_id='$p_id'");
	
?>
<script type='text/javascript'>window.location.href = "board-body.php?id=<?echo $p_id ?>" </script>