

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="dist/slick.js"></script>
     <script type="text/javascript" src="dist/jquery.scrollUp.js"></script>
  
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    
<!--    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">-->



  <?php 
 $airoo = mysqli_connect("localhost", "root", "", "electricPark");
?>
    <title>Airoo Ceiling Fan</title>
     
  
         <script type="text/javascript" src="dist/demo.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
	</head>
<body>


 <header class="tm-header">
 	<img class="tm-logo" src="Images/airoo.png" alt="Airoo Ceiling Fan">
 	<h2 style="text-align: center; color:white;" >Airoo Ceiling Fan</h2>
 	<nav class="tm-nav">
 		<div>
 			<ul>
 			 <li class="tm-list"><a href="airoo.php">Home</a></li>	
 			  <li class="tm-list"><a href="explore.php">Explore</a></li>	
 			   <li class="tm-list"><a href="index.php">Booking & Order</a></li>	
 			    <li class="tm-list"><a href="fans.php">Fans</a></li>
                <li class="tm-list"><a href="registrationForm.php">Login</a>
				 <li class="tm-list"><a href="signinForm.php">Contact</a></li>
                </li>	<li><a href="admin.php">Admin</a></li>
 			    	
 			</ul>
 		</div>
 	</nav>
 </header>
    <section id="tm-imgslider">
                  <div class="Slider" style="border:1px white outset;">        
                <div class="row">
                    
                    
                          <div class="col-md-12">
                            <div class="container-fluid">
                        
                             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="w-100" src="images/slider1.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="images/slider2.png" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="images/slider3.png" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="images/slider4.png" alt="Fourth slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

       </div>
   </div>



              <!--       <div class="col-md-3" style="margin-left:-.5%;" > 
                     <div class="row">
                        <div class="column">
                       <img src="Images/iso.png">
                       
                         </div>
                       <div class="column">
                        <img src="Images/bea.png"> </div>
                        </div
                        
                        </div>
                        
                        
                  
                  
                       

        </div> -->
        </div>

                     
     </div>
</div>
              
</section>

   <section class="slider fan flex style="border:1px white outset;">
      
                    <div class="tm-fans">

                        <img  src="Images/plus.png">
                       <a href="fans.php"> <p class="s">Plus</p> </a>

                    </div>
                        <div class="tm-fans">
                        <img  src="Images/delight.png">
                            <a href="fans.php"> <p class="s">Delight</p></a>

                    </div>
                        <div class="tm-fans">
                        <img  src="Images/comfort.png">
                            <a href="fans.php">  <p class="s">Comfort</p></a>

                    </div>
                    <div class="tm-fans">
                        <img  src="Images/supreme.png">
                       <a href="fans.php"> <p class="s">Supreme</p> </a>

                    </div>
                        <div class="tm-fans">
                        <img  src="Images/super.png">
                            <a href="fans.php"> <p class="s">Super</p></a>

                    </div>
                        <div class="tm-fans">
                        <img  src="Images/allrounder.png">
                            <a href="fans.php"> <p class="s">All-rounder</p></a>

                    </div>
                    </div>
            
                  
    </section>
'
 <section class="tm-servicesection style="border:1px white outset;">

        <div class="tm-service">
              <img class="tm-serimage" src="Images/car-front.png">
             <div>
                       <p class="b">Free Shipping</p>
                         <p> No need to pay any extra charges to ship your fans</p> </div>
        </div>
        <div class="tm-service">
              <img class="tm-serimage" src="Images/spa.png">
             <div>
                        <p class="b">Warranty</p>
                        <p> Relax at the house after you buy the product </p> </div>
        </div>

    </section>
    '

        <section class="tm-servicesection">
         <div class="tm-service">
              <img class="tm-serimage" src="Images/bell.png">
             <div>
                        <p class="b">Helpline </p>
                        <p>We are always here to help you</p> </div>
        </div>
        <div class="tm-service">
              <img class="tm-serimage" src="Images/coffee.png">
             <div>
                        <p class="b">Technicians</p>
                        <p>We are providing free installations in Dhaka</p> </div>
        </div>
    </section>


    <section class="tm-makers">
    	<div class="tm-book">
    		<div class="tm-bookbutton">
    			<a href="index.php"><p>Make your Booking</p></a>
    		</div>
    	</div>
    </section>


  

    <footer class="tm-footer">
    	<div class="tm-us">
    		<p class="bold">About Us</p>
    		<p>Airoo Ceiling fan is the concern of Fouzia Electrical Industries 
    		providing electrical goods since 1988. We manufacture a vairety of 
    	    ceiling fans having 100% copper wire and sheet and aluminium blade</p>  


    	</div>
    	<div class="tm-address">
        <p class="bold">Address</p>
        <p>Taj Market,148 Nowabpur,Dhaka-1100<br/>
            Phone : +88 01712073191, +88 01686984804<br/>
			
            Email : electricpark213@gmail.com</p>    
        </div>
        <br/>
    <div class="tm-media">
        <a href="www.facebook.com"> <img src="Images/fb.png"></a>
        <a href="#"> <img src="Images/G.png"> </a>
        <a href="#"> <img src="Images/twittr.png"> </a>
        <a href="#">  <img src="Images/insta.png"> </a>
        
        </div>

    </footer>

<script type ="text/JavaScript"  src="js/jquery.min.js"></script>
<script type ="text/JavaScript" src="js/popper.min.js"></script>
<script type ="text/JavaScript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>

<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

   

</body>
</html>