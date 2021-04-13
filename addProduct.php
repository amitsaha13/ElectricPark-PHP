
<!DOCTYPE html>
<html>



<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
	
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  

  <?php 
   $db = mysqli_connect("localhost", "root", "", "electricPark");
  //error_reporting(0);

$msg = "";
if (isset($_POST["submit1"])) {
        $v1=rand(1111,9999);
         $v2=rand(1111,9999);
         $v3=$v1.$v2;
         //$v3=md5($v3);
   
     	$fnm=$_FILES["pimage"]["name"];	
     	
     	$dst="Images/".basename($fnm);
        move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

    $sql2="INSERT INTO products (name,price,quantity,image,details,code) VALUES('$_POST[pnm]','$_POST[pprice]','$_POST[pqty]','$dst','$_POST[pdescription]','$_POST[pcode]')";

     	//$sql2="INSERT INTO pr (Img_Dir) VALUES('$fnm')";
     	
 

     	if(mysqli_query($db, $sql2)){
  		$msg = "Product uploaded successfully";
  	     }
  	     else{
  		$msg = "Failed to upload Product";
  	     }
     }

 ?>

   

	<title>Add Product</title>

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
    <li ><a href="admin.php"><button class="btn btn-primary">ADMIN<button></a></li>
  </ul>
</div>
</div>

	 <div class="grid_10">
	 	<div class="box round first">
	 		<h1 align="center" >Add New Product</h1>
	 		<?php echo $msg;?>
	 		<div class="block">
	 			<form name="form1" action="addproduct.php" method="POST" enctype="multipart/form-data">
	 				<table>
	 					<tr>
	 						<td>Name</td>
	 						<td><input type="text" name="pnm"></td> 
	 					</tr>
	 					<tr>
	 						<td>Price</td>
	 						<td><input type="text" name="pprice"></td> 
	 					</tr>
	 					<tr>
	 						<td>Quantity</td>
	 						<td><input type="text" name="pqty"></td> 
	 					</tr>
	 					<tr>
	 						<td>Image</td>
	 						<td><input type="file" name="pimage"></td> 
	 					</tr>
	 					
	 					<tr>
	 						<td>Description</td>
	 						<td><textarea cols="22" rows="6" name="pdescription"></textarea></td>
	 					</tr>
						<tr>
	 						<td>Code</td>
	 						<td><input type="text" name="pcode"></td> 
	 					</tr>
	 					<tr>
	 						<td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
	 					</tr>
	 				</table>


	 			</form>
	 			
	 		</div>
	 	</div>
	 </div>







   
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type ="text/JavaScript"  src="js/jquery.min.js"></script>
<script type ="text/JavaScript" src="js/popper.min.js"></script>
<script type ="text/JavaScript" src="js/bootstrap.min.js"></script>

</body>
</html>