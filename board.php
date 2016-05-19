<?
	require "condb.php";
	session_start();
	$_SESSION["email"] = "admin@easywebboard.com";
	$_SESSION["name"] = "SuperAdmin";
	$_SESSION["t_id"] = "1";
	
	
	$email =$_SESSION["email"];
	$name = $_SESSION["name"];
	$t_id = $_SESSION["t_id"];
	if($email=="" || $name=="" || $t_id=="" ){
		?>
		<script type='text/javascript'>window.location.href = "index.php" </script>
		<?
	}
?>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<!DOCTYPE html>
<html>
	<head>
		<title>Easy Web Board</title>
		<link rel="stylesheet" type="text/css" href="CSS/board-css.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/3.3.5/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/3.3.5/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<script src="bootstrap/3.3.5/js/jquery-1.11.3.min.js"></script>
		<script src="bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="JS/board-js.js"></script>
		<style type="text/css">
			body {
				background-image: url("image/bg.png");
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}
			h1{
				font-family: "Times New Roman", Times, serif;
				font-size: 90px;
			}
		</style>
	</head>

	<body>
		<nav id="header" class="navbar navbar-fixed-top">
			<div id="header-container" class="container navbar-container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a id="brand" class="navbar-brand" href="#">Easy Web Board</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="board.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Thread Type <span class="caret"></span></a>
							
								<ul class="dropdown-menu" role="menu">
									<?	
									$qry_pt=mysql_query("select * from post_type");
									while($pt = mysql_fetch_array($qry_pt)){
									?>
									<li><a href="board.php?type=<? echo $pt["title_id"]; ?>"><? echo $pt["type_name"]; ?></a></li>
									<?}?>
								</ul>
								
						</li>
						<li><a href="create-post.php"><span class="glyphicon glyphicon-pencil"></span> New post</a></li>
						<? if($t_id == 1){?>
						<li><a href="#setting"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
						<?}?>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					  <li><a href="sign_out.php"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div><!-- /.container -->
		</nav><!-- /.navbar -->
		
		
		<div class="table-responsive">
			<table align="center" class="table" style="width: 80%">
				<thead>
					<tr>
						<th width="10%"><p align="center">ID</p></th>
						<th width="15%"><p align="center">Time</p></th>
						<th width="40%"><p align="center">Post</p></th>
						<th width="10%"><p align="center">Post Name</p></th>
					</tr>
				</thead>
				<?
					$sql="select * from post";
					if($_GET["type"]){
						$sql="select * from post where title_id = ".$_GET["type"];
					}
					
					$qry=mysql_query($sql);
				?>
				<tbody>
				<?					
					while($objResult = mysql_fetch_array($qry)){
						$qry_user=mysql_query("select name from user where email ='".$objResult["email"]."'");
				?>
					<tr>
						<td align="center"><? echo $objResult["p_id"] ?></td>
						<td align="center"><? echo $objResult["p_datetime"] ?></td>
						<td align="center"><a href="board-body.php?id=<? echo $objResult["p_id"] ?>"><? echo $objResult["title"] ?></a></td>
						<td align="center"><? echo mysql_result($qry_user,0,"name") ?></td>
					</tr>
					<?}?>
				</tbody>
			</table>
		</div>
	</body>
</html>