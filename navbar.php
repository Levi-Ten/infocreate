 <?php session_start(); ?>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<div class="wrapper"> 

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-light">
			<div class="container-fluid"> 
	  			<a class="navbar-brand" href="#">
	  				<img src="img/logo.gif">
	  			</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" 
  						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
  						aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>

	  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    			<ul class="navbar-nav mr-auto">
	      				<li class="nav-item active">
	       					 <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      				</li>
	      				<li class="nav-item">
	        				<a class="nav-link" href="start2.php">Product</a>
	      				</li>
     <!--  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a> -->
        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      <!-- </li> -->
      <li class="nav-item">
		        <a class="nav-link" href="#">FAQ</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Cosmetics brands</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="form.php">Contact</a>
		      </li>

		    </ul>
				 

		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-warning my-2 my-sm-0 btn-sm" type="submit">Search</button>
		    </form>
		    <?php include dirname(__DIR__) . '/bootstrap/form.php'; ?>
		    </div>
		  </div>
</nav>
</div>