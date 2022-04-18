<?php
session_start();
	if(isset($_SESSION['checked']) == "loging"){
		header("Location:admin.php");
	}else{
?>

<?php include('common/header.php'); ?>
	<div class="row" style="padding-top:200px;">
		<div class="col-sm-4"></div>
		<div class="col-sm-4 bg-light" style="padding:30px; border-radius:10px;">
			<p class="bg-success text-white text-center">
				<?php
				$msg = isset($_GET['msg']);
				if($msg == 1){
					echo "Registration Success!";
				} ?>
			</p>
			<h3 class="text-center text-success">Admin Panel</h3>
			<p class="bg-danger text-white text-center">
			<?php
				$ms = isset($_GET['ms']);
				if($ms == 2){
					echo "Login Failed! Try again";
				}
				if(isset($_GET['log'])==5){
					echo "Please Login again!";
				} ?>
			<form action="login.php" method="post">
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" name="email" class="form-control"  id="email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" name="pass" class="form-control"  id="pwd">
			  </div>
			  <div class="form-group form-check">
			    <label class="form-check-label">
			      <input class="form-check-input" type="checkbox"> Remember me
			    </label>
			  </div>
			  <button type="submit" name="login"  class="btn btn-primary">Login</button>
			  <a href="register.php" type="button" class="btn btn-success float-right">New User ? Register Now</a>
			</form>
		</div>
		<div class="col-sm-4"></div>
		</div>
<?php include('common/footer.php'); ?>

<?php } ?>