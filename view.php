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
		<div class="table-responsive">

		<?php
			include('common/db.php');
			$id = $_GET['id'];

			$sql = "SELECT * FROM register WHERE id = $id AND status = 1";
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result)) {
			?>

			<table class="table table-hover table-bordered">
				<tr>
					<td>UID</td>
					<td><?php echo $row['id']; ?></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><?php echo $row['name']; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $row['email']; ?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><?php echo $row['pass']; ?></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><?php echo $row['mobile']; ?></td>
				</tr>
				<tr>
					<td>Reg Date</td>
					<td><?php echo $row['mobile']; ?></td>
				</tr>
				<tr>
					<td>
						<a href="admin.php" type="button" class="btn btn-info">Go Back</a>
					</td>
					<td></td>
				</tr>
			</table>
		<?php } ?>

			</div>
		</div>
	</div>

<?php include('common/footer.php'); ?>

<?php
}else{
	header("Location:index.php?log=5");
}
?>