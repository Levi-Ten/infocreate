<link rel="stylesheet" type="text/css" href="style.css">
	<section class="c">
		<header class="header d-flex flex-column justify-content-center">
			<div class="cotainer">
				<div class="row justify-content-center">
					<div class="col-6">

		 
						<?php if(isset($_SESSION['message']['succes'])) : ?>
								<?php foreach($_SESSION['message']['succes'] as $log) : ?>
									<div class="alert alert-success"><?=$log?></div>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
				</div>
                   <h1 class="display-2">The Best Natural Makeup Brands That Makeup Artists Actually Use</h1>
				     <p class="lead">Here are the top-performing natural makeup products you'll find in the kits of makeup best artists</p>
			</div>
		</header>
          <div class="container">
				<div class="row">
					<div class="c1 col-sm-6 col-lg-4">
						<div class="card">
						  	<img class="card-img-top" src="img/author.jpg" alt="Card image cap">
							  	<div class="card-body">
									    <h5 class="card-title">sephora cosmetics</h5>
										<p class="card-text">Thanks to growing consumer concern and education, we’re definitely seeing an uptick in the use of the phrase “clean beauty.” Last year, for example, Sephora announced the launch of Clean at Sephora, the company’s new category that clearly establishes which of their products are formulated without controversial ingredients. Those that meet Sephora’s ingredients guidelines are deemed “clean” and receive the retailer’s Clean at Sephora seal.</p>
	                         	</div>
	                         	<img class="card-img-top" src="img/author2.jpg" alt="Card image cap">
	                         	<div class="card-body">
									    <h5 class="card-title">SEPHORA COLLECTION Cosmic Glow Luminizer</h5>
										<p class="card-text">What it is: A multipurpose glossy luminizer for lips, eyes and face.
										What it does: His glossy luminizer delivers on an iridescent wet look with multidimensional, ultra-trendy shine! 
									    What else you need to know: Its silky smooth texture provides long-lasting comfort and its transparent glitter shade suits all skin tone. Fun and trendy, this luminizer will definitely be one of the must haves in your beauty routine!</p>
	                         	</div>
					 	</div>
				    </div>
                <div class="c2 col-sm-6 col-lg-4">
				    <div class="card mb-4">
						 <img class="card-img-top" src="img/pure.jpg">
						     <div class="card-body">
										<h5 class="card-title"> 100% Pure</h5>
										<p class="card-text">Founded with the purest intentions possible, 100% Pure strives to create all-natural, cruelty-free skin care products with an environmentally conscious mindset. All formulations are made without any chemicals, synthetics, fragrances or dyes, to ensure what reaches your face is safe and pure...</p>
	                                <a href="pagea.php" class="btn btn-outline-primary btn-sm">Read more</a>
					         </div>
					</div>
				<div class="card mb-4">
					<img class="card-img-top" src="img/photo-2.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Bite Beauty</h5>
							   <p class="card-text">Did you know that Bite Beauty is natural and organic?</p>
					        <a href="pagea.php" class="btn btn-outline-primary btn-sm">Read more</a>
						</div>
				</div>

							 
							 <!-- <nav aria-label="Page navigation example">
						       <ul class="pagination">
								    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
								    <li class="page-item active"><a class="page-link" href="index.php">1</a></li>
								    <li class="page-item"><a class="page-link" href="pagea.php">2</a></li>
								    
						    </ul> -->
						    </nav>
						</div>
					
						<div class="c3 col-sm-6 col-lg-4">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


						<div class="list-group">
			      <a href="#" class="list-group-item list-group-item-action active">Recommended articles</a>
				  <a href="#" class="list-group-item list-group-item-action">What are the best non toxic makeup brands?</a>
				  <a href="#" class="list-group-item list-group-item-action">Is 100% pure organic?</a>
				  <a href="#" class="list-group-item list-group-item-action">Is Bare Minerals non toxic?</a>
				  <a href="#" class="list-group-item list-group-item-action">Are cosmetic products 100 percent safe?</a>
				</div>
			
				<div class="text">
				<h3>Gallery</h3>
			</div>
			 
			<div class="block">
				<div class="row no-gutters">
					<div class="col-6">
						<div class="image-box">
						<img class="img-fluid" src="img/gallery-1">
					</div>
					</div>
					<div class="col-6">
						<div class="image-box">
						<img class="img-fluid" src="img/gallery-2">
					</div>
				</div>
				<div class="col-6">
					<div class="image-box">
						<img class="img-fluid" src="img/gallery-3">
					</div>
					</div>
					<div class="col-6">
						<div class="image-box">
						<img class="img-fluid" src="img/gallery-4">
					</div>
				</div>
				<div class="col-6">
					<div class="image-box">
						<img class="img-fluid" src="img/gallery-5">
					</div>
					</div>
					<div class="col-6">
						<div class="image-box">
						<img class="img-fluid" src="img/gallery-6">
					</div>
				</div>
			</div>

				</div> <!-- block -->
			 
					<div class="text">
				<h3>Tags Cloud</h3>
			</div>
				<div class="block"> 
					<a class="badge badge-info" href="#">cosmetic</a>
					<a class="badge badge-info" href="#">minerals</a>
					<a class="badge badge-info" href="#">lipstick</a>
					<a class="badge badge-info" href="#">mascara</a>
					<a class="badge badge-info" href="#">natural</a>
					<a class="badge badge-info" href="#">face powder</a>
				</div>
			
		</div> <!-- <div class="c3 col-sm-6 col-lg-4"> -->
	</div>
</div>

</section>
		
						<?php 
	if (isset($_SESSION['message']['succes'])) {
		session_unset();
		}
?>
