<?
	session_start();
	$email =$_SESSION["email"];
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
		td{
			color: white;
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
        
        <div class="col-md-2"></div>
        <div class="col-md-8">
	        <div class="panel panel-info">
		      <div class="panel-heading">Easy Web Board</div>
		      <div class="panel-body">
			  
			  <form name="form" method="POST" action="add_post.php">
		      	<div class="form-group">
				  <label for="usr">Title:</label>
				  <input type="text" class="form-control" id="usr" name="usr">
				</div>
				<div class="form-group">
				  <label for="comment">Body:</label>
				  <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
				</div>
				
				<div class="col-md-10"></div>
				<select name="type" id="type">
				<?
					$qry_pt2=mysql_query("select * from post_type");
					while($pt2 = mysql_fetch_array($qry_pt2)){
					?>
					<option value="<? echo $pt2["title_id"]; ?>"><? echo $pt2["type_name"]; ?></option>
				<?	}?>
					</select>
				<button type="submit" class="btn btn-success">Post</button>
				<form>
		      </div>
		    </div>
		</div>
        <div class="col-md-2"></div>
        
</html>