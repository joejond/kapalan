<?php 
session_start();
include	'inc/conn_db.php';

$msg = '<p class="text-center text-danger"><b><span class="glyphicon glyphicon-warning-sign"></span>  Silahkan Login dahulu.</b></p>';

if(isset($_POST['userid'])) {
		$user = strip_tags(trim($_POST['userid'])); #echo $user;
		$pass = strip_tags(trim($_POST['passwd'])); #echo $pass;
		
		$q 		= mysql_query("SELECT * FROM member WHERE username = '".$user."' and password='".$pass."'");
		$data	= mysql_fetch_array($q);
		
		//$l = mysql_query("select lks_nama,lks_kode from lokasi where lks_id = '".$data['lks_id']."'");
			//$ll = mysql_fetch_array($l);
		
		if ($user == '' || $pass == ''){
			$msg = '<p class="text-center text-danger" ><b><span class="glyphicon glyphicon-warning-sign"></span>   Please type your username or password!!</b></p>';
		}
		else if (!$data) {
			$msg = '<p class="text-center text-danger"><b><span class="glyphicon glyphicon-warning-sign"></span>  You not authorize to login, please check your username or password.</b></p>';
		}
		
		else {
			$_SESSION['s_id']	= $data['mem_id'];	
			$_SESSION['username']	= $data['username'];
			//$_SESSION['s_nama']	= $data['realname'];
			//$_SESSION['id_cabang'] = $data['lks_id'];
			//$_SESSION['s_level'] = $data['level'];
			//$_SESSION['s_cabang'] = $ll['lks_nama'];
			//$_SESSION['kd_cabang'] = $ll['lks_kode'];
			
			echo '<script type="text/javascript"> window.parent.location ="./";</script>' ;
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | MONITA - Vessel Tracking System</title>
	<link rel="shortcut icon" href="img/mit.ico">
    
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
	body {padding-top : 20px;}
	
	</style>
	
	<script>
	$(document).ready(function(){
		$("#pesan").delay(3000).fadeOut('slow');		
	});
	
	</script>
	

</head>
<body>

<div class="container">
  	<div class="row">
		<!--div class="col-md-6 col-md-offset-3 " >
			<p class="center-block" align="center">
				<img src="inc/image/ship.png"><h2>Vessel Tracking System</h2>
			</p>
		</div-->
		<div class="col-md-4 col-md-offset-4">
			<h2 class="text-center">Login VTS </h2>
		</div>
  	</div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4" >
          	<div class="well">
				<form role="form" name="flogin" id="flogin" method="post"  action=""> 
                <div class="form-group">
					<label class="control-label">Username</label>
					<input class="form-control" name="userid" id="userid" placeholder="username" type="text">
                </div>
                <div class="form-group">
					<label for="inputPassword" class="control-label">Password</label>
					<input class="form-control" name="passwd" id="passwd" placeholder="password" type="password">
                </div>
                <div class="form-group">
					<button type="submit" class="btn btn-primary btn-block" name="login" id="login" >Login</button>
				</div>
				
				</form>
			</div>
      	</div>
    </div>
	
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div id="pesan">
			<div class="well well-sm">
			
				<?php echo $msg?>
			</div>
		</div>
	
		</div>
	</div>     
	
</div>
    
</body>
</html>