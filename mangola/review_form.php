<?php
	session_start();	
	if(!(isset($_SESSION['name'])&&isset($_SESSION['email'])))
	{
    	header('Location: register.php');
	}
	include "includes/dbconnect.php";
	$product_id=$_GET['product_id'];
	$user_id=$_SESSION['user_id'];
	

?>
<!DOCTYPE html>
<html>
	<?php include "includes/css_header.php" ?>
	<body style="background-color: #EEEEEE;">
		<?php include "includes/header_postlogin.php" ?>
		
		<div class="row">
			<div class="col-md-6">
				<h1 class="text-center"> <b>Thank You for Shopping at Mangola.com. Please add a review for this product.</b> </h1>
			</div>
			<div class="col-md-6">

				<form class="text-center" action="add_to_review.php" method="POST">
					<input type="hidden" name="product_id" value=" <?php echo $product_id; ?>">
					<label><h3><b>Review Heading</b></h3></label>
					<input type="text" name="review_heading" class="form-control" placeholder="Add the heading here..."><br>
					<label><h3><b>Review</b></h3></label>
					<input type="text" name="review_text" class="form-control" placeholder="Add the riview here..."><br>
					<input type="submit" value="Submit Review" class="btn btn-danger btn-lg">
				</form>
			</div>
		</div>
	</body>
</html>