<?php   require 'auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>BS</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body> 

	<?php require 'navbar.php';?>

	<h1 align="center">All Contact Lists</h1>

	<table class="table table-bordered">
		<tr>
			<th>No.</th>
			<th>Name</th>
			
			<th>Email</th>
			<th>Subject</th>
			<th>Icon</th>
			<th>Action</th>
		</tr>

<?php 
$sql = " SELECT * FROM contact ";
$result = mysqli_query($conn,$sql);

$t = 0;

while ($row = mysqli_fetch_assoc($result)) {
	$t++;
?>		

		<tr>
			<td><?php echo $t ?></td>
			<td><?php echo $row['name']; ?></td>
			<td>
			<?php echo $row['email']; ?>
			</td>
			<td><?php echo $row['subject'] ?></td>
			<td><?php echo $row['icon'] ?></td>
			<td>
				<a href="del_contact.php?id=<?php echo($row['id']) ?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>	

<?php } ?>		
		
	</table>

	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>