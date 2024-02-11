<?php
session_start();

// initializing variables
$firstname = "";
$lastname = "";
$number = "";
$address = "";
$email    = "";
$feedback="";
$errors = array(); 
$productname="";
$quantity="";
$price="";
$contact="";





// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'jobscope');

if(!$db)
{echo "not connected";}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $number = mysqli_real_escape_string($db, $_POST['number']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($firstname)) { array_push($errors, "firstname is required"); }
  if (empty($lastname)) { array_push($errors, "lastname is required"); }
  if (empty($number)) { array_push($errors, "number is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  
  }
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
   
  	$password_1 = md5($password_1); //encrypt the password before saving in the database

  	$query = "INSERT INTO user (firstname,lastname,number,address ,email, password_1,password_2) 
  			  VALUES('$firstname','$lastname','$number','$address', '$email', '$password_1','$password_2')";
   
   mysqli_query($db, $query);
  //	$_SESSION['firstname'] = $firstname;
  	$_SESSION['success'] = "You are now logged in";
    
    
  	header('location: loginuser.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
 



  
  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password_1)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password_1 = md5($password_1);
  	$query = "SELECT * FROM user WHERE email='$email' AND password_1='$password_1'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	 // $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: productproject.php');
  	}else {
  		array_push($errors, "invalid email/password");
  	}
  }
}


//feedback
if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $feedback = mysqli_real_escape_string($db, $_POST['feedback']);
 



  
  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($feedback)) {
  	array_push($errors, "Enter your Feedback");
  }

  if (count($errors) == 0) {
  	
  	$query = "SELECT * FROM user WHERE email='$email'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	 // $_SESSION['username'] = $username;

     $query = "UPDATE user SET feedback='$feedback' 
     WHERE email='$email'";


          mysqli_query($db, $query);

  	  header('location: feedback.php');
  	}
    else {
  		array_push($errors, "invalid email");
  	}
  }
}


// REGISTER farmer
if (isset($_POST['reg_farmer'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $number = mysqli_real_escape_string($db, $_POST['number']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($firstname)) { array_push($errors, "firstname is required"); }
  if (empty($lastname)) { array_push($errors, "lastname is required"); }
  if (empty($number)) { array_push($errors, "number is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  
  }
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM farmer WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
   
  	$password_1 = md5($password_1); //encrypt the password before saving in the database
  	$password_2 = md5($password_2); //encrypt the password before saving in the database

  	$query2 = "INSERT INTO farmer (firstname,lastname,number,address,email, password_1,password_2) 
  			  VALUES('$firstname','$lastname','$number','$address', '$email', '$password_1','$password_2')";
   
   mysqli_query($db, $query2);
  //	$_SESSION['firstname'] = $firstname;
  	$_SESSION['success'] = "You are now logged in";
    
    
  	header('location: loginfarmer.php');
  }
}


// LOGIN FARMER
if (isset($_POST['login_farmer'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
 



  
  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password_1)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password_1 = md5($password_1);
  	$query = "SELECT * FROM farmer WHERE email='$email' AND password_1='$password_1'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	 // $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: productInput.php');
  	}else {
  		array_push($errors, "invalid email/password");
  	}
  }
}

// LOGIN admin
if (isset($_POST['login_admin'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
 



  
  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($pass)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  //	$password_1 = md5($password_1);
  	$query = "SELECT * FROM admindb WHERE email='$email' AND pass='$pass'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	 // $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: admin.php');
  	}else {
  		array_push($errors, "invalid email/password");
  	}
  }
}









// Product entry by farmer
if (isset($_POST['reg_product'])) {
  // receive all input values from the form
  $productname = mysqli_real_escape_string($db, $_POST['productname']);
  $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
 

  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($productname)) { array_push($errors, "productname is required"); }
  if (empty($quantity)) { array_push($errors, "quantity is required"); }
  if (empty($price)) { array_push($errors, "price is required"); }
  if (empty($contact)) { array_push($errors, "contact is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $product_check_query = "SELECT * FROM product WHERE  productname='$productname' LIMIT 1";
  $result = mysqli_query($db, $product_check_query);
  $product = mysqli_fetch_assoc($result);
  
  if ($product) { // if product doesn't exists
    
     
    
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
   
  $query2="UPDATE product SET quantity='$quantity', price='$price' , contact='$contact' , address='$address'
  WHERE productname='$productname'";
  
   
   mysqli_query($db, $query2);
  
  	$_SESSION['success'] = "You are now logged in";
    
    
  	header('location: productproject.php');
  }
}

  else  {
    array_push($errors, "Product dosen't Exist");
    
  }
}




?>