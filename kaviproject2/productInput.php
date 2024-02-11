<?php include('server.php') ?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewreport" content="width=device-width,initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">


<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<style>
.box{
	
    background-color:#C1FBB9;
    color: blue;
    top: 75%;
    left: 35%;
	position:absolute;
    transform: translate(-0%,-50%);
    box-sizing: border-box;
    padding: 50px 100px;
}

body{
background-image:url("img/tracter.png");
background-size:cover;

}

a{
color:blue;
list-style-type:none;
}
a:hover{
color:green;
}

img{
    width: 120px;
    height: 120px;
    position: absolute;
    top: -65px;
    left:	135px;
	
}

</style>
</head>
<body>



 
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#" style="color:green">FARMER CORNER</a>
			</div>
		<ul class="nav navbar-nav">
		  <li><a href="project.html">Home</a></li>
		  
		  <li><a href="aboutproject.html">About</a></li>
		  
		</ul>
		
		
		
	  </div>
	</nav>
		<div class="box">
			<form class="form-horizontal" method="post" action="productinput.php">
			<?php include('errors.php'); ?>

   <img src="img/11zon_cropped.png">
<br>
				<div class="form-group">
					<label class="control-label">Product Name:</label>
					<input type="text" name="productname" id="fname" class="form-control" value="<?php echo $productname; ?>">
				</div>

				<div class="form-group">
					<label class="control-label">Product Quantity:</label>
					<input type="text" name="quantity"  class="form-control"  value="<?php echo $quantity; ?>">
				</div>

				<div class="form-group">
					<label>Price:</label>
					<input type="text" name="price"  class="form-control"   value="<?php echo $price; ?> ">
				</div>

				<div class="form-group">
					<label>Contact:</label>
					<input type="phone" name="contact" id="Email" class="form-control"  value="<?php echo $contact; ?>">
				</div>



				<div class="form-group">
					<label>Address:</label>
					<input type="text" name="address"  class="form-control" value="<?php echo $address; ?>" >
				</div>

			

				<center><input class="btn btn-success" type="submit" name="reg_product" value="register"></center>
				
				
				
				
				
			</div>
		

			</form>
			</form>
			</body>