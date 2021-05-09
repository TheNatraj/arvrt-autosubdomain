<?php session_start();
include("includes/db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aryavart </title>
    <meta name="description" content="">
  <?php include("includes/css.php");?>
      <link rel="stylesheet"  href="css/lightslider.css"/>
      <style>
      #theme-layout{
	background-color: black;
}

.footer_style{
			background: #212529;
			color: white;
		}
          
        .content-slider li{
		    background-color: #ed3020;
		    text-align: center;
		    color: #FFF;
		}
		.content-slider h3 {
		    margin: 0;
		    padding: 70px 0;
		} 
      </style>
	   
      </head>

<body id="theme-layout">
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#Home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Products">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Also_Deal_In">Also Deal In</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#About_Us">About Us</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#Team">Team</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#Shop_Adress">Adress</a>
      </li>
    </ul>
  </div>  
</nav>
    
    </header>
    
    <section>
        <div class="container-fluid">
    <div class="row">
        <div class="item">
            <ul id="content-slider" class="content-slider">
                <li>
                    <img src="img/theme/s1.jpg">
                </li>
                <li>
                    <img src="img/theme/s2.jpg">
                </li>
                <li>
                    <img src="img/theme/s3.jpg">
                </li> 
            </ul>
        </div>
            </div>

    </div>	
    </section>
	
	<!-- Products Images-->
	
	<section class="theme-card">
		<div class="container-fluid">
			<h1 class="text-center text-capitalize pt-5"><span id="Products">Products</span></h1>
		<hr class="w-35 mx-auto">
			<div class="row text-center">
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
		</div>
		</div>
		
<!--Line 2-->
		<div class="container-fluid">
			<div class="row text-center mt-3">
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
		</div>
		</div>
</section>
	
	
	
	<!-- Also Deal in-->
	
<section>
		<div class="container-fluid">
			<h1 class="text-center text-capitalize pt-5"><span id="Also_Deal_In">Also Deal In</span></h1>
		<hr class="w-35 mx-auto">
			<div class="row text-center">
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
				<div class="col-lg-3 col-md-3 col-12"><div class="card">
  <img class="card-img-top" src="img/1_1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Enquiry Now</a>
  </div>
</div>
</div>
		</div>
		</div>
    <!-- Also Deal in Ends Here-->
    
    <!--About Us-->
    <section class="abt-text">
    <div class="container-fluid">
			<h1 class="text-center text-capitalize pt-5"><span id="About_Us">About Us</span></h1>
		<hr class="w-35 mx-auto">
			<div class="row text-center">
		<div class="col-lg-6 col-md-6 col-12">
		<div class="card ml-3">
  <img src="img/shopkeeper.jpg" class="card-img-top" alt="shop_keeper">
  <div class="card-body">
    <h5 class="card-title">Shop Keeper Name</h5>
  </div>
</div>
		</div>
		<div class="col-lg-6 col-md-6 col-12">
		<h1>Who Am I?</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis luctus lectus malesuada commodo. Maecenas id ligula euismod, placerat augue consequat, pharetra quam. Nam arcu eros, dignissim tempus mi id, sollicitudin consectetur est. Mauris euismod dolor ipsum, sit amet blandit nisl rhoncus at. Cras at lobortis dolor. Cras mollis, ipsum in sagittis tristique, elit augue luctus nisl, ac efficitur libero eros rhoncus tellus. Curabitur sed lorem lacus. Etiam convallis justo nulla, sit amet elementum risus pellentesque a. Nulla vehicula ipsum nec sapien elementum, laoreet pulvinar enim suscipit. Fusce faucibus justo odio, nec ornare odio tincidunt ultrices. Donec a posuere orci. Sed convallis est vel erat mattis ullamcorper. Praesent pharetra venenatis urna, ac.</p>
		</div>
		</div>
	</div>
    </section>
    <!--About Us End Here-->
	
	<!--Team-->
<section>	
<div class="container-fluid">
			<h1 class="text-center text-capitalize pt-5"><span id="Team">Team</span></h1>
		<hr class="w-35 mx-auto">
          <div class="container-fluid">
              <div class="row mt-3">
		<div class="col-lg-3 col-md-3 col-12">
	<img src="img/office_staff.jpg" class="rounded-circle" alt="Cinque Terre">
            <h2 class="text-center text-capitalize pt-5">Name One</h2>
			</div>
		<div class="col-lg-3 col-md-3 col-12">
	<img src="img/office_staff.jpg" class="rounded-circle" alt="Cinque Terre">
            <h2 class="text-center text-capitalize pt-5">Name One</h2>
			</div>
		<div class="col-lg-3 col-md-3 col-12">
	<img src="img/office_staff.jpg" class="rounded-circle" alt="Cinque Terre">
            <h2 class="text-center text-capitalize pt-5">Name One</h2>
			</div>
		<div class="col-lg-3 col-md-3 col-12">
	<img src="img/office_staff.jpg" class="rounded-circle" alt="Cinque Terre">
            <h2 class="text-center text-capitalize pt-5">Name One</h2>
			</div>
                  </div>
              </div>
    </div>
    </section>
    <!--Team End Here-->
    
    <!--Footer-->
	<section>
		<footer class="footer_style">
			<main class="container-fluid">
				<div class="row p-3 mt-3">
				
					<div class="col-lg-6 col-md-6 col-12">
						<h4>Contact Us</h4>
						<dl>
						<dt><span id="Shop_Adress">Shop Adress</span></dt>
							<dd>35 Gumati Muhal Auraiya</dd>
						</dl>
						<dl>
						<dt>Telephone Number</dt>
							<dd><a href="tel:#">+91 9458866479</a> <span>or</span> <a href="tel:#">+91 8309561483</a></dd>
						</dl>
						<dl>
						<dt>Telephone Number</dt>
							<dd><a href="mailto:abc@xyz.com" target="_blank">abc@xyz.com</a></dd>
						</dl>
					
					</div>
					
					
					<div class="col-lg-4 col-md-4 col-12">
						<h4>Links</h4>
						<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="#Products">Products</a></li>
						<li><a href="#Also_Deal_In">Also Deal In</a></li>
						<li><a href="#About_Us">About Us</a></li>
						<li><a href="#Shop_Adress">Adress</a></li>
						</ul>
					
					</div>
					
					<div class="col-lg-2 col-md-2 col-12">
					<p class="text-capitalize"> &#169 2021 adbhutbharat.net </p>
                        <img src="img/150X150.gif" alt="logo" class="image-fluid">
					
					</div>
				</div>
			
			</main>
		</footer>
	</section>
    <!--Footer End Here-->
<?php include("includes/js.php");?> 
    <script src="js/lightslider.js"></script> 
    <script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true, 
                gallery:false,
                item:1, 
                slideMargin: 0,
                speed:2000,
                auto:true,  
            });
		});
    </script>
    
</body>
</html>
