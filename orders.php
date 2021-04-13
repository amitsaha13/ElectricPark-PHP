<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


<?php
error_reporting(0);
 
if(isset($_POST['submit'])){
$name= $_POST['name'];
$subject= $_POST['subject'];
$email= $_POST['email'];
$message= $_POST['message'];

  $file_open = fopen("orders.csv", "a");
  $no_rows = count(file("orders.csv"));
  
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'subject' => $subject,
   'email'  => $email,
   'message' => $message
  );
  fputcsv($file_open, $form_data);
  $error = '<label class="text-success">Thank you for your order</label>';
  $name = '';
  $subject = '';
  $email = '';
  $message = '';

}
?>
    



    
    <title>ORDER PAGE</title>

<style>
body{
	color:grey;
}
.input_data{
	width:300px;
}
</style>



   
   
</head>
<body>

	  <section id="Home">
        <div class="Head">
             
            
              <nav class="navbar navbar-expand-lg navbar-light bg-black">
                    <div class="container">
                      <i class="fa fa-shopping-cart" style="font-size:36px"><a href="cart.php" class="p-1">CART</a></i>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                               <span class="navbar-toggler-icon"><i class="fa fa-navicon"></i></span>
                        </button>

                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                     <i  class='fa fa-user-secret' style='font-size:20px'><a href="adminForm.php" class="p-3" >ADMIN</a></i>
                                </li>
                                <li class="nav-item">
                                      <i class="fa fa-user" style="font-size:20px"><a href="loginForm.php" class="p-3">LOGIN</a></i>
                                </li>

                                <li class="nav-item">
                                    <i class='fab fa-telegram-plane' style='font-size:20px'><a href="contactForm.php" class="p-3">CONTACT</a></i>
                                </li>
                                


                            </ul>

                        </div>
                    </div>
                </nav>
      
        </div>
         
    </section>



	<section id="Contact" >
		

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contactbox">
						<div class="container">
							<?php echo $error;?>
							<form class="formcontrol" action="orders.php" method="POST" >
			<input class="input_data" type="text" name="name"   placeholder="Your Name" required>
			<br>
			<input type="text" name="subject"  placeholder="Your Subject" required>
			<br>
			<input type="text" name="email"  placeholder="Your Email" required>
			<br>
			<textarea type="message" name="message"  placeholder="Message" row="8" required></textarea>
            <br>
            <button  type="submit" name="submit" class="submit" id= "sub">SEND MESSAGE</button>

		</form>
						</div>
			
					</div>

			
				</div>

				
				
			</div>
			
		
		</div>

		

		</div>

		
		
				
		
		
	</section>

<div class="container" id="pagin">
  
  
  <ul class="pagination" align="centre">
    <li ><a href="airoo.php">Home </a></li>
    <li ><a href="fans.php">|  Fans</a></li>
    <li ><a href="index.php">|  Booking & Order</a></li>
    <li ><a href="#">|  4</a></li>
    <li class="active"><a href="cart.php">|  Cart</a></li>
  </ul>
</div>

	
	   



	
	

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
