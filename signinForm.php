<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 200px;
  padding-top:0px;
  background-color: #7acdf9;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
  #but{
	  background-color:green;
  }
}
#pagin{
	padding-left:200px;
	margin-bottom :0px;
}
</style>


<?php
   
     error_reporting(0);
     include 'login.php';
   

       if(isset($_POST['submitL'])){
    	
    	$name =$_POST[UserName];
        $pass =$_POST[Password];
        
        $query=mysqli_query($conn,"SELECT * from buyers where NAME='$name' and Password='$pass'") or die("query 1 incorrect.....");
        
        $row=mysqli_fetch_array($query);
        

         	if($row['Name']==$name && $row['Password']==$pass)
         	{
         		   header("location:contactForm.php");

         	}
         	else
         	{
         		echo "Incorrect password. Please try again.";
         	}
         }
       
     


 

    error_reporting(0);
    include 'login.php'; 
    //$name =$_POST[UserName];
    //$email =$_POST[Email];
    //$pass =$_POST[Password];
    $sql="INSERT into buyers (Name,Email,Password) values('$_POST[UserName]','$_POST[Email]','$_POST[Password]')";
    if($_POST['submitR'])
    {
    	if(mysqli_query($conn,$sql)){
    		
    	}

    	else{
    		echo "Went wrong";
    	}
    }

    
?>


</head>
<body>
<div class="container" id="pagin">
  
  
  <ul class="pagination" align="centre">
    <li ><a href="airoo.php">Home</a></li>
    <li ><a href="explore.php">Explore</a></li>
    <li ><a href="fans.php">Fans</a></li>
    <li ><a href="index.php">Booking & Order</a></li>
    <li class="active"><a href="registrationForm.php">log in</a></li>
    <li class="active"><a href="registrationForm.php">Register</a></li>
    
    <li ><a href="cart.php">Cart</a></li>
    <li ><a href="airoo.php">Log out</a></li>
  </ul>
</div>
<div class ="container">
<h1>Sign In to Contact with us....</h1>
<div class ="row">

<div class="col-md-6">
<form  action="contact_new.php" method="POST">
  
    <h1>Sign In</h1>
    <p>Please fill in this form to log in.</p>
    <hr>

    <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter name" name="UserName" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>

    
    <hr>
    

    <button class="btn btn-primary" id ="but" type="submit" name="submitL" value="Login">Sign In</button>
  
  
 
</form>
 
</div>

<div class="col-md-6">
<form  action="registrationForm.php" method="POST"">
  
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	<label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter name" name="UserName" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="Email" required>
	
	

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>

    
    <hr>
    

    <button class="btn btn-primary"id ="but" type="submit" name="submitR" value="Register">Register</button>
  
  
 
</form>
 <div class="">
    <p>Already have an account? <a href="#">Sign in </a>.</p>
  </div>
</div>




</div>
</div>
</body>
</html>
