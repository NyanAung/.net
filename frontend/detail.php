	   <?php  require 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>BS</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<link rel="stylesheet"  href="./css/bootstrap.min.css">

</head>
<body> 

	<div class="container-fluid">

	<?php 
    
    $id = $_GET['id'];

    $sql = " SELECT * FROM product WHERE id = '$id' ";

    $result = mysqli_query($conn,$sql);

    while ($res = mysqli_fetch_assoc($result)) {
    	
	?>

	<div class="row">

		<div class="col-md-4">
			<img src="../backend/upload/<?php echo $res['img']; ?>" class="img-fluid" width="100%">
			
		</div>

	<div class="col-md-8">
		<h3 class="p-3 m-1 bg-primary text-white"><?php echo $res['p_name']; ?></h3>
		
		
		<i>Category: <?php echo $res['p_cat']; ?></i>

		<hr>

		<p><?php echo  ($res['p_desc']); ?></p>
		


		<a href="index.php" class="btn btn-success">back</a>

		
	</div>	
		
	</div>

    <?php } ?>
		
	</div>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>