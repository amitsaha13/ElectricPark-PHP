<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      }		
}
}
 
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <title>Airoo Ceiling Fan</title>
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="dist/slick.js"></script>
     <script type="text/javascript" src="dist/jquery.scrollUp.js"></script>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
   

    
<!--    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">-->

  
         <script type="text/javascript" src="dist/demo.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
	<style>
		#pagin{
			align:centre;
		}
	</style>
	
	</head>
	
<body>
<div class="container" id="pagin">
  
  
  <ul class="pagination" align="centre">
    <li ><a href="airoo.php">Home</a></li>
    <li ><a href="explore.php">Explore</a></li>
    <li ><a href="fans.php">Fans</a></li>
    <li ><a href="index.php">Booking & Order</a></li>
    <li ><a href="registrationForm.php">log in</a></li>
    <li ><a href="registrationForm.php">Register</a></li>
	<li ><a href="signinForm.php">Contact</a></li>
    
    <li class="active"><a href="cart.php">Cart</a></li>
    <li ><a href="airoo.php">Log out</a></li>
  </ul>
</div>

<div class="container">
<div class="row">

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td>
<img src='<?php echo $product["image"]; ?>' width="50" height="40" />
</td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onChange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?>
value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?>
value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?>
value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?>
value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?>
value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong >TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<a href="registrationForm.php"><button type="button" class="btn btn-success" >Confirm Purchase</button></a>



</div>
</div>


</body>
</html>

</body>
</html>