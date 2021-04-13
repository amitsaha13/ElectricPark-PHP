<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" 
  integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <h1>My First Bootstrap Page</h1>
  
  <?php
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con, 'electricPark');
	
	$query = "select 'name','image','price','discount' from 'fan' order by id ASC";
	$queryfire = mysqli_query($con,$query);
	$num = mysqli_num_rows($queryfire);
	if($num>0)
	{
		while($product = mysqli_fetch_array($queryfire))
		{
			print_r($product);
		}
	}
	
  ?>
   
</div>

</body>
</html>