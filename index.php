<?php include 'root/action.php'; ?>
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
			<h3>CRUD APPLICATION TABLE</h3>
			<br><br>
			<a href="add-user.php" class="btn btn-success">Add User</a>
			<table class="table table-responsive table-hover table-strip">
				<thead>
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Phone</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php $sql = dbSQL("SELECT * FROM crudapp ORDER BY id DESC ");
				foreach($sql AS $val) { ?>
					<tr>
						<td><?=$val->fname; ?></td>
						<td><?=$val->lname; ?></td>
						<td><?=$val->phone; ?></td>
						<td>
							<a href="" class="btn btn-primary">Edit</a>
							<a href="" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="col-md-3">
			<h3></h3>
		</div>
	</div>
</body>
</html>