<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
	<title>crud application</title>
</head>
<body>

	<div class="row">
		<div class="col-md-3">
			<h3></h3>
		</div>
		<div class="col-md-6">
			<h3>Add New User</h3>
			<br><br>
			<div class="">
				<form method="POST" action="">
					<div class="form-group">
						<label>Firstname</label>
						<input type="text" name="firstname" class="form-control" placeholder="Enter Firstname" required>
					</div>
					<div class="form-group">
						<label>Lastname</label>
						<input type="text" name="lastname" class="form-control" placeholder="Enter Lastname" required>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" placeholder="Enter Phone" required>
					</div>
					<br>
					<div class="form-group">
						<button type="submit" name="add_btn" class="btn btn-primary">Add</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-3">
			<h3></h3>
		</div>
	</div>
</body>
</html>