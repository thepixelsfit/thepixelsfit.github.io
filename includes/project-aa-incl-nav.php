 <nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	      <a class="navbar-brand" href="project-aa-index.php">KMA</a></div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="defaultNavbar1">
	      <ul class="nav navbar-nav navbar-right">
	        <li 
	 <?php
if($page==
  'home'){
	echo 'class="active"';
}
?>
        ><a href="project-aa-index.php">Home<span class="sr-only">(current)</span></a></li>
	        <li 
	<?php
if($page==
  'services'){
	echo 'class="active"';
}
?>
        ><a href="project-aa-services.php">Services</a></li>
	        <li  
	<?php
if($page==
  'contact'){
	echo 'class="active"';
}
?>
             ><a href="project-aa-contactus.php">Contact Us</a></li>
              </ul>
            </li>
          </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
            </div>
	        <button type="submit" class="btn btn-default">Submit</button>
          </form>
	     
            </li>
          </ul>
        </div>
	    <!-- /.navbar-collapse -->
    </div>
	  <!-- /.container-fluid -->
  </nav>