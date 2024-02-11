<?php include('server.php') ?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewreport" content="width=device-width,initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<style>


.error {
    width: 100%; 
    margin: 0px auto; 
    padding: 10px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: center;
  }
  
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
background-image:url("img/bglogin.png");
background-size:cover;

}
label{
	
  font-family: 'Roboto', sans-serif;
	color:green;
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
		
		<ul class="nav navbar-nav navbar-right nav-pills">
				        <li><a  href="signup.project"data-toggle="tooltip" data-placement="left" title="sign up">
				  <span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				  <li><a href="" data-toggle="tooltip" data-placement="left" title="login">
				  <span class="glyphicon glyphicon-log-in"></span> Login</a></li> 	 
		</ul>
	  </div>
	</nav>

		<div class="box">
			<form method="post" action="signupuser.php" class="form-horizontal">
			    <img src="img/11zon_cropped.png"><br>
				<?php include('errors.php'); ?>
            
				<div class="form-group">
					<label class="control-label">First Name:</label>
					<input type="text" name="firstname"  id="fname" class="form-control" value="<?php echo $firstname; ?>">
				</div>

				<div class="form-group">
					<label>Second Name:</label>
					<input type="text" name="lastname" id="sname" class="form-control" value="<?php echo $lastname; ?>">
				</div>

				<div class="form-group">
					<label>Phone Number:</label>
					<input type="phone" name="number" id="number" class="form-control" value="<?php echo $number; ?>">
				</div>

				<div class="form-group">
					<label>Email:</label>
					<input type="email" name="email" id="Email" class="form-control" value="<?php echo $email; ?>">
				</div>


				<div class="form-group">
					<label>Address:</label>
					<input type="text" name="address" id="add" class="form-control" value="<?php echo $address; ?>">
				</div>

				<div class="form-group">
					<label>Type Password:</label>
					<input type="password" name="password_1" id="pwd" class="form-control" >
				</div>

				<div class="form-group">
					<label>Confirm Password:</label>
					<input type="password" name="password_2" id="pswd" class="form-control" >
				</div>

				<center><input class="btn btn-success" name="reg_user" type="submit" value="register" ></center>
				
				<div><br>
				<a href="loginuser.php">Do you have an account? login</a>
				</div>
				
				<div><br>
				<center> <a href="signupproject.html" 
				style="color:blue;font-size:20px">
				<span class="glyphicon glyphicon-arrow-left">GoBack</span></a></center></div>
				
			</div>
		

			</form>
			</form>
			</body>