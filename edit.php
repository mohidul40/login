<?php
session_start();
	if($_SESSION['checked'] == "loging"){
?>


<?php include('common/header.php'); ?>

	<div class="row">
		<div class="col-sm-4 bg-primary">
			<h1>Login Sccessful</h1>
		</div>
		<div class="col-sm-4 bg-secondary">
			<h1>Admin Login Panel</h1>
		</div>
		<div class="col-sm-4 bg-success">
			<a type="button" class="btn btn-info" href="logout.php">Log Out</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2 bg-info">
			<h1>Menu Bar</h1>
		</div>
		<div class="col-sm-10 bg-light">

			<?php
			include('common/db.php');
			$id = $_GET['id'];

			$sql = "SELECT * FROM register WHERE id = $id AND status = 1";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result)) {
			?>

<form action="update.php" method="POST">
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="name">
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="email">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" name="pass" value="<?php echo $row['pass']; ?>" class="form-control" id="pwd">
	  </div>
	  <div class="form-group">
	    <label for="address">Address:</label>
	    <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" id="address">
	  </div>
	  <div class="form-group">
	    <label for="mobile">Mobile:</label>
	    <input type="number" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control" id="mobile">
	    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	  </div>
	  <a href="admin.php" type="button" class="btn btn-info float-left">Cancle</a>
	  <button type="submit" name="update" class="btn btn-primary float-right">Update</button>
</form>

		<?php } ?>


		</div>
	</div>

<?php include('common/footer.php'); ?>

<?php
}else{
	header("Location:index.php?log=5");
}
?>