<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- error message style-->
<link rel="stylesheet" href="style.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<style>






a {
  text-decoration: none;
  color: White;
  position: center;
}

.cta {
  position: relative;
  margin: auto;
  padding: 19px 22px;
  transition: all 0.2s ease;
}
.cta:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  border-radius: 28px;
  background: rgb(0, 230, 153);
  width: 56px;
  height: 56px;
  transition: all 0.3s ease;
}
.cta span {
  position: relative;
  font-size: 16px;
  line-height: 18px;
  font-weight: 900;
  letter-spacing: 0.25em;
  text-transform: uppercase;
  vertical-align: middle;
}
.cta svg {
  position: relative;
  top: 0;
  margin-left: 10px;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke: #111;
  stroke-width: 2;
  transform: translateX(-5px);
  transition: all 0.3s ease;
}
.cta:hover:before {
  width: 100%;
  background: #09c606;
}
.cta:hover svg {
  transform: translateX(0);
}
.cta:active {
  transform: scale(0.96);
}



.div1{
    transition:  border-top 2.3s;
    transition:  border-left 1.3s;
    
    background: #fff;
    float: center;
     background-color:#99cc00;
      padding: 50px; 
     border-radius: 15px 50px;
      width: 70%;

}

.div1:hover {
    border-top: 10px solid #ffffff;
    border-left: 10px solid #ffffff;

  box-shadow: 0 0 101px rgba(33,33,33,.2); 
}


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




img{
    width: 120px;
    height: 120px;
    position: absolute;
    top:-65px;
    left:135px;
	
}

body {
  font-family: 'lato', sans-serif;
}
.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}






    </style>

</head>
<body >
    

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
<center>

<div class="div1">
<a href="adminviewuser.php" class="cta">
  <span>view user details and feedback</span>
  <svg width="13px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</a>
<br>
<br>
<br>




<a href="adminviewfarmer.php" class="cta">
  <span>view farmer details</span>
  <svg width="13px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>

</a>
<br>
<br>
<br>


<a href="adminviewproduct.php" class="cta">
  <span>view product details</span>
  <svg width="13px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</a>
<br>
</div>

</body>
</html>