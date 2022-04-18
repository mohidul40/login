<?php
session_start();
if($_SESSION['checked'] = "loging"){
	header("Location:admin.php");
	}else{
?>

<?php include('common/header.php'); ?>

	<div class="row" style="padding-top:50px;">
		<div class="col-sm-4"></div>
		<div class="col-sm-4 bg-light" style="padding:30px; border-radius:10px;">
			   <h3 class="text-center text-success">User Registration</h3>
				<p class="bg-danger text-white text-center">
					<?php
					$msg = isset($_GET['msg']);
					if($msg == 2){
						echo "Registration Failed!";
					} ?>
				</p>
				<form action="do_register.php" method="post">

				  <div class="form-group">
				    <label for="Name">Name:</label>
				    <input type="text" Name="name"  class="form-control"  id="Name">
				  </div>

				  <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="text" Name="email" class="form-control"  id="email">
				  </div>

				  <div class="form-group">
				    <label for="pwd">password:</label>
				    <input type="password"Name="pass" class="form-control"  id="pwd">
				  </div>

				  <div class="form-group">
				    <label for="address">Address:</label>  
				    <input type="text"Name="address" class="form-control"  id="address">
				  </div>

				   <div class="form-group">
				    <label for="mobile">Mobile:</label>
				    <input type="number"Name="mobile" class="form-control"  id="mobile">
				  </div>

				  <a href="index.php" type="button" class="btn btn-info float-left">Go to Login Page</a>
				  <button type="submit" Name="reg" class="btn btn-primary float-right">Register</button>
				</form>
		</div>
		<div class="col-sm-4"></div>
		</div>
<?php include('common/footer.php'); ?>
<?php } ?>