<?php $page="contact";
	?>
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
	
	
	
	
		
  <?php include 'includes/project-aa-incl-nav.php';
  ?>
  
  
  
  
    
<div class="container"><h3>Kennesaw Mountain Accounting</h3><br>
  <p>2234 Kennesaw Blvd.<br>
  Kennesaw, GA <br>
  770-555-1212</p>
	  </div>
  
  
  
  
  
  <div clas="container">
  <form method="POST" action="project-aa-thanks.php">
	
	<div class="form-group">
      <label for="firstname">First name:</label>
      <input type="text" class="form-control" id="email" placeholder="First name" name="firstname">
	  </div>
	
	<div class="form-group">
      <label for="lastname">Last name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname">
	  </div>
	
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	  </div>
	<br>
	
	<div class="form-group">
      <label for="phone">Phone number:</label>
      <input type="number" class="form-control" id="email" placeholder="Enter number" name="phone">
	  </div>
	<br>
	
	<div class="form-group">
      <label for="message">Comments:</label>
      <textarea rows="9" class="form-control" id="message" placeholder="..." name="message"
				cols="30"></textarea>
	  </div>
	
	<button type="submit" class="btn btn-default" name="submit">Submit</button>
	<br><br>
	<br><br>
	
	
</form>
	  </div>
  
   
    
     
   <?php include 'includes/project-aa-incl-footer.php';
  ?>
  
  
  
  
  
  </body>
</html>