<?php include('server.php') ?>
		
<html>
<head>
<meta charset="utf-8">
<meta name="viewreport" content="width=device-width,initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- error message style-->
<link rel="stylesheet" href="style.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<style>
.box{
	
    background-color:#C1FBB9;
    color: blue;
    top: 60%;
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
	color:darkgreen;
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
    top:-65px;
    left:135px;
	
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
				  <li><a  href="signupproject.html"data-toggle="tooltip" data-placement="left" title="sign up">
				  <span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				  <li><a href="loginproject.html" data-toggle="tooltip" data-placement="left" title="login">
				  <span class="glyphicon glyphicon-log-in"></span> Login</a></li> 	 
		</ul>
	  </div>
	</nav>
   
		<div class="box">
			<form class="form-horizontal" method="post" action="loginuser.php">
			<br>
			<?php include('errors.php'); ?>
             
   <p style="font-weight: bold;   text-align:center;color:green; font-size:20px;">Login to buy products</p>

            
			<img src="img/11zon_cropped.png">
				
				
				<div class="form-group" >
					<label>Email:</label>
					<input type="email" name="email" class="form-control">
				</div>


				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="password_1"  class="form-control">
				</div>


				<center><input class="btn btn-success" type="submit" name="login_user">
				</center>
				
				<div><br>
				<a href="signupuser.php">don't have an account? register</a>
				</div>	
				
				
			</div>
		</div>

			</form>
			
			</body>
			</html>



