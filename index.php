<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>
<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>Online Voting System</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign in to Vote for your Candidates</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
					<a href="admin" button type="submit" class="btn btn-primary btn-block btn-flat">Admin</a></button>
					<a href="dashboard.php" button type="submit" class="btn btn-primary btn-block btn-flat">Dashboard</a></button>
        		</div>
      		</div>
    	</form>
  	</div>
	  <?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>

</div>
</body>

<footer>
<p style="text-align:center;"><b>NOTE:</b> To Create New Voter's ID and Password- Login as the Commissioner/Admin, Check Voters List and Add New Account. The System Automatically Generates VotersID </p>
</div>
</html>