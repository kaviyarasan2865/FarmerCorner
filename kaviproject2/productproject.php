

<?php 
include('server.php'); 
$db = mysqli_connect('localhost', 'root', '', 'kaviproject');

$query="SELECT * FROM `product`where  productname = 'coconut';"; 
$coconut=mysqli_query($db,$query); 

$query="SELECT * FROM `product`where  productname = 'brinjal';"; 
$brinjal=mysqli_query($db,$query); 

$query="SELECT * FROM `product`where  productname = 'bittergourd';"; 
$bittergourd=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'smallonion';"; 
$smallonion=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'tomato';"; 
$tomato=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'turmeric';"; 
$turmeric=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'beetroot';"; 
$beetroot=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'ladiesfinger';"; 
$ladiesfinger=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'potato';"; 
$potato=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'groundnut';"; 
$groundnut=mysqli_query($db,$query);


$query="SELECT * FROM `product`where  productname = 'raddish';"; 
$raddish=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'bigonion';"; 
$bigonion=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'ridgegourd';"; 
$ridgegourd=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'lemon';"; 
$lemon=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'SnakeGourd';"; 
$SnakeGourd=mysqli_query($db,$query);

$query="SELECT * FROM `product`where  productname = 'redchilli';"; 
$redchilli=mysqli_query($db,$query);



?> 

<html>
  <head>
  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <script>
		var coll = document.getElementsByClassName("collapsible");
		var i;
		
		for (i = 0; i < coll.length; i++) {
		  coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var content = this.nextElementSibling;
			if (content.style.display === "block") {
			  content.style.display = "none";
			} else {
			  content.style.display = "block";
			}
		  });
		}
		</script>
	<style>
	
		* {
		  box-sizing: border-box;
		}

		body {
		  font-family: Arial, Helvetica, sans-serif;
		}


		.column {
		  float: left;
		  width: 25%;
		  padding: 0 10px;
		}


		.row {margin: 0 -5px;}


		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}


		@media screen and (max-width: 600px) {
		  .column {
			width: 100%;
			display: block;
			margin-bottom: 20px;
		  }
		}

		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  padding: 16px;
		  text-align: center;
		  background-color: #f1f1f1;
		}

		.collapsible {
  background-color: rgb(8, 176, 16);
  color: white;
  cursor: pointer;
  padding: 10px;
  width: 50%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

 .active,.collapsible:hover {
  background-color: rgb(12, 162, 19);
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}
.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
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
		  <li  class="active"><a href="">Product</a></li>
		  <li><a href="aboutproject.html">About</a></li>
		  <li><a href="feedback.php">Feedback</a></li>
		</ul>
		
		
		
	  </div>
	</nav>




	<!--carousel-->
<div class="container" style="background-color:#000">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
     
    </ol>

    
    <div class="carousel-inner">
	         
      <div class="item active">
     <img src="img/products.png" style="height:450px;width:100%;">
		<div class="carousel-caption">
		
		</div>
      </div>

      <div class="item">
	 
        <img src="img/interact.png" style="height:450px;width:100%;">
		<div class="carousel-caption">
		
		
		</div>
      </div>
    
      <div class="item">
        <img src="img/sunset.png" style="height:450px;width:100%;">
		<div class="carousel-caption">
	
		
		</div>
      </div>  
	 
    </div>

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"
	data-toggle="tooltip" data-placement="right" title="see more offers">
      <span class="glyphicon glyphicon-chevron-left" style="color:black;background-color:;margin-left:-40px"  ></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"
	 data-toggle="tooltip" data-placement="left" title="see more offers">
      <span class="glyphicon glyphicon-chevron-right" style="color:black;background-color:;margin-right:-40px"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 <br><br>

<!--cards-->
	
<h2 style="text-align:center">Products</h2><br><br>

<div class="row">

  <div class="column">
    <div class="card" style="background-color:">
      <img src="img/coconut.png" style="height:200px;width:200px"><br><br>
	  <p>Coconut</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($coconut)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>


		
		 
	<?php 
               } 
          ?> 
		  </div>
	  
	  
    </div>
  </div>

  <div class="column">
    <div class="card" style="background-color:">
      <img src="img/brinjal.png" style="height:200px;width:200px"><br><br>
	  <p>Brinjal</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($brinjal)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
		  </div>
    </div>
  
  
 <div class="column">
    <div class="card" style="background-color:">
      <img src="img/bittergourd.png" style="height:200px;width:200px"><br><br>
	  <p>bitter gourd</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($bittergourd)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card" style="background-color:">
      <img src="img/smallonion.png" style="height:200px;width:200px"><br><br>
	  <p>small onion</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($smallonion)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>
  
  </div>
  <br><br>
  
  <div class="row">
   <div class="column">
    <div class="card" style="background-color:">
      <img src="img/tomato.png" style="height:200px;width:200px"><br><br>
	  <p>tomato</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($tomato)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card" >
      <img src="img/turmeric.png" style="height:200px;width:200px;"><br><br>
	  <p>turmeric</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($turmeric)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card" style="background-color:">
      <img src="img/beetroot.png" style="height:200px;width:200px"><br><br>
	  <p>beetroot</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($beetroot)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card" style="background-color:">
      <img src="img/ladiesfinger.png" style="height:200px;width:200px"><br><br>
	  <p>ladies finger</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($ladiesfinger)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>
  </div> <br><br>
  
  <div class="row">
  
  
<div class="column">
    <div class="card" style="background-color:">
      <img src="img/potato.png" style="height:200px;width:200px"><br><br>
	  <p>potato</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($potato)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>  
  
<div class="column">
    <div class="card" style="background-color:">
      <img src="img/groundnut.png" style="height:200px;width:200px"><br><br>
	  <p>groundnut</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($groundnut)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>  
  
<div class="column">
    <div class="card" style="background-color:">
      <img src="img/raddish.png" style="height:200px;width:200px"><br><br>
	  <p>raddish</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($raddish)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>
  
    
<div class="column">
    <div class="card" style="background-color:">
      <img src="img/bigonion.png" style="height:200px;width:200px"><br><br>
	  <p>big onion</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($bigonion)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>

	</div> <br><br>
    
  <div class="row">
  
  
<div class="column">
    <div class="card" style="background-color:">
      <img src="img/ridgegourd.png" style="height:200px;width:200px"><br><br>
	  <p>ridge gourd</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($ridgegourd)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>  
  
<div class="column">
    <div class="card" style="background-color:">
      <img src="img/lemon.png" style="height:200px;width:200px"><br><br>
	  <p>lemon</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($lemon)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>  
  
<div class="column">
    <div class="card" style="background-color:">
      <img src="img/SnakeGourd.png" style="height:200px;width:200px"><br><br>
	  <p>SnakeGourd</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($SnakeGourd)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>
  
    
<div class="column">
    <div class="card">
      <img src="img/redchilli.png" style="height:200px;width:200px"><br><br>
	  <p>redchilli</p><br>
	  <button type="button" class="collapsible">See Details</button>
	  <div class="content"> 
	  <?php while($rows=mysqli_fetch_assoc($redchilli)) 
		{ 
		?> 
		<p>Quantity:<?php echo  $rows['quantity']; ?> </p>
		<p> Price:<?php echo $rows['price']; ?> </p>
		<p>Contact:<?php echo  $rows['contact']; ?> </p>
		<p>Address:<?php echo  $rows['address']; ?> </p>
	<?php 
               } 
          ?> 
		  </div>
    </div>
  </div>

	</div> <br><br>
   
 </div>
 <br>
<hr>

<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;
	
	for (i = 0; i < coll.length; i++) {
	  coll[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var content = this.nextElementSibling;
		if (content.style.maxHeight){
		  content.style.maxHeight = null;
		} else {
		  content.style.maxHeight = content.scrollHeight + "px";
		} 
	  });
	}
	</script>


	
<!--footer-->
 <div class="footer" style="padding:10px; text-align:left; background:; color:grey; margin-top:20px;">
<div class="container">
 <div class="row">
 
		<div class="column">
		<span class="glyphicon glyphicon-earphone"> 9876543210</span><br><br><br>
		</div> 
		
		<div class="column">
	    <span class="glyphicon glyphicon-envelope"> farmercorner1@gmail.com</span> <br><br>  <br>
		</div>
		
		<div class="column">
		  <span class="glyphicon glyphicon-pushpin">  address:no.1,kingcomplex,pollachi.
		  <br><br> 
		</div>
		
		<div class="column">
	    <span class="glyphicon glyphicon-send">  @farmer_corner</span> <br><br>  <br>  
		</div>
		
  </div>


</div>
</div>

	</body>
	</html>
