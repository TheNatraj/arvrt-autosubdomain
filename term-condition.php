<?php session_start();
include("includes/db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aryavart</title>
    <meta name="description" content="">
  <?php include("includes/css.php");?>
	   
      </head>
  <body>
	    
  <?php include("includes/header.php");?> 
  <!-- ***** FEATURES ***** -->
  <section class="services sec-normal motpath sec-bg4">
    <div class="container-fluid">
      <div class="service-wrap">
        <div class="row">
          <div class="col-sm-12 text-left">
            <h2 class="section-heading">Our Term & Conditions</h2>
            <?php   $sql2="SELECT * from term_condition";
                $exe2=mysqli_query($conn,$sql2);
                $res=mysqli_fetch_array($exe2); ?>
            <p class="section-subheading"><?php echo html_entity_decode($res['data']);  ?></p>
          </div>
  
        </div>
      </div>
    </div>
  </section>
    <!-- ***** CASE STUDY ***** -->
    <!-- ***** HELP ***** -->
  <section class="services help pt-4 pb-80">
    <div class="container">
      <div class="service-wrap">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container">
              <a href="javascript:void(Tawk_API.toggle())" class="help-item">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/livechat.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">Live Chat</div>
                  <div class="description">Lorem Ipsum is simply dummy text printing.</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container">
              <a href="#" class="help-item">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/emailopen.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">Send Ticket</div>
                  <div class="description">Lorem Ipsum is simply dummy text printing.</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container">
              <a href="#" class="help-item">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/book.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">Knowledge base</div>
                  <div class="description">Lorem Ipsum is simply dummy text printing.</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 

<?php include("includes/footer.php");?>
<?php include("includes/js.php");?>
</body>
</html>
