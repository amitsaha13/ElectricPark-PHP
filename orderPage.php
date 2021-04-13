<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>



<?php
error_reporting(0);
 
if(isset($_POST['submit'])){
$name= $_POST['name'];
$address= $_POST['address'];
$phone= $_POST['phone'];
$item= $_POST['item'];
$bill= $_POST['bill'];
$date= $_POST['date'];

  $file_open = fopen("orders.csv", "a");
  $no_rows = count(file("orders.csv"));
  
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'address' => $address,
   'phone'  => $phone,
   'item'  => $item,
   'bill' => $bill,
   'date' => $date
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Thank you for your order</label>';
  $name = '';
  $address = '';
  $phone = '';
  $item = '';
  $bill = ''; 
  $date = '';

}
?>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Airoo Ceiling Fan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="navbar navbar-dark bg-primary"">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="airoo.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="explore.php">Explore</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fans.php">Fans</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php">Booking & Order</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="registrationForm.php">log in</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="registrationForm.php">Register</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="cart.php">Cart</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="airoo.php">|   Log out</a>
      </li>
    </ul>
  </div>
</nav>
 </div>   

<div class="container">
  <h2 >ORDER PAGE</h2>
  <form action="orderPage.php" method="POST">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>
    <div class="form-group">
      <label for="Address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter your address" name="address">
    </div>
	<div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter your phone no" name="phone">
    </div>
	<div class="form-group">
      <label for="item">Items:</label>
      <input type="text" class="form-control" id="item" placeholder="Enter the name of items" name="item">
    </div>
	<div class="form-group">
      <label for="bill">Bill:</label>
      <input type="text" class="form-control" id="bill" placeholder="Enter the amount of bill" name="bill">
    </div>
	<div class="form-group">
      <label for="date">Date of booking:</label>
      <input type="text" class="form-control" id="date" placeholder="dd-mm-yyyy     i.e -    07-04-2019 " name="date">
    </div>
	
    
    <button type="submit" name="submit"   class="btn btn-primary">Submit</button>
  </form>
 
</div>

</body>
</html>
