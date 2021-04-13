
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <title>Airoo Ceiling Fan</title>
     
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
   <link rel="stylesheet" type="text/css" href="css/cart_style.css">

    
<!--    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">-->

  
         <script type="text/javascript" src="dist/demo.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
	<style type="text/css"> 

   ul
   { 
     
    
     height: 1em;
      width: 100%;
     } 

     li
  { 
    
     padding-right:10px;
	 width:50px;
      }       
      </style>
	
	</head>
<body>

<div class="container" id="pagin">
 <div class="text-center">
  
  <ul class="pagination" align="centre">
    <li width="200px"><a href="airoo.php">Home</a></li>
    <li ><a href="explore.php">Explore</a></li>
    <li ><a href="fans.php">Fans</a></li>
    <li class="active"><a href="index.php">Booking & Order</a></li>
    <li ><a href="registrationForm.php">Log in</a></li>
    <li ><a href="registrationForm.php">Registration</a></li>
    <li ><a href="signinForm.php">Contact</a></li>
    <li ><a href="cart.php">Cart</a></li>
    <li ><a href="airoo.php">Log Out</a></li>
  </ul>
</div>
</div>


<div class="container">

  <div class="row">
<?php
session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
"SELECT * FROM `products` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];
 
$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}
 
	}
}
?>


<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="Images/cart-icon.png"  width="50" height="50"/> Cart<span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>
<?php
$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='image'><img src='".$row['image']."' /></div>
    <div class='name'>".$row['name']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }
mysqli_close($con);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

</div>
</div>



</body>
</html>

