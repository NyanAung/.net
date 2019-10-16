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

	<h1 align="center">Add News</h1>

	<div class="container-fluid">
		<div class="row">

	<div class="col-md-8 offset-md-2 bg-light p-3">

<?php 

if (isset($_POST['add'])) {
	
	$name = strip_tags($_POST['name']);

	$desc = array($_POST=>'desc');
	// $price = strip_tags($_POST['price']);
	$cat = strip_tags($_POST['cat']);


	
   

	$image_name = $_FILES['img']['name'];

	$image_tmp = $_FILES['img']['tmp_name'];




	if ($name == '') {
		$nameer = " Please Add Product Name ";
	}

	

	if ($cat == '') {
		$cater = " Please Select Product Category ";
	}

	if ($desc == '') {
		$descer = " Please Add Product Description ";
	}

	if ($image_name == '') {
		$imger = " Please Add Product Image ";
	}

	


if ($name != '' &&  $cat != '' && $desc != '' && $image_name != '') {
	

	$sql = " INSERT INTO product 
	       (p_name ,  p_cat , img ,  p_desc) VALUES
	       ( '$name' ,  '$cat' , '$image_name', '$desc' )";

	       mysqli_query($conn,$sql);


	       move_uploaded_file($image_tmp, "upload/$image_name");


	       $success="Message sent";
}

}

?>

	<form method="post" action="" enctype="multipart/form-data">

		<div class="form-group">
			<label> Name</label>
			<span class="text-danger"><?php if (isset($nameer)) { echo $nameer; } ?></span>
			<input type="text" name="name" class="form-control">
			
		</div>

		

		<div class="form-group">
			<label>Category</label>
			<span class="text-danger"><?php if (isset($cater)) { echo $cater; } ?></span>
			<select class="form-control" name="cat">
				<option value="">-</option>
				
	    <?php 

	    $sql =" SELECT * FROM category";
	    $res = mysqli_query($conn,$sql);

	    while ($row = mysqli_fetch_assoc($res)) {
	    
	    ?>

        <option value="<?php echo $row['cat_name']; ?>">
        	<?php echo $row['cat_name']; ?>
        </option>

	        <?php } ?>

	    
			</select>
		</div>		
			
		<div class="form-group">
			<label> Image</label>
			<span class="text-danger"><?php if (isset($imger)) { echo $imger; } ?></span>
				
			
			<input type="file" name="img" class="form-control">
		</div>	

		<div class="form-group">
			<label> Description</label>
			<span class="text-danger"><?php if (isset($descer)) { echo $descer; } ?></span>
		<textarea name="desc" class="form-control" rows="6"> </textarea> 


		
		</div>	

		<div class="form-group">
             <input type="submit" name="add" class="btn btn-danger" value="Add New Product">
		</div>	
		<span><?php if (isset($success)) { echo $success;
		} ?></span>
		</form>
		
	</div>		
			
		</div>
		
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>