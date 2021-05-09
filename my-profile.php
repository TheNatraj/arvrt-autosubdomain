<?php
session_start();
include "includes/db_config.php";
if(isset($_POST['submit']))
{ extract($_POST);
	date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
$sst="INSERT INTO `enquiry`(`name`, `email`, `phone`, `category_id`, `sub_category`, `subject`,`message`,`shop_name`, `created_date`) VALUES ('$name','$email','$phone','$cat','$sub_cat','$subject','$message','$shop_name','$date')";
if(mysqli_query($conn, $sst)) {
    $last_id= mysqli_insert_id($conn);
      if(count($_FILES['files']['name']) > 0)  {
        for($i = 0; $i < count($_FILES['files']['name']); $i++){
            $tmp_file = $_FILES['files']['tmp_name'][$i];
            $ext = pathinfo($_FILES["files"]["name"][$i], PATHINFO_EXTENSION);
            $rand = md5(uniqid().rand());
            $upd_image = $rand.".".$ext;
            move_uploaded_file($tmp_file,"admin/images/".$upd_image);
       $sql_prd="INSERT into enquiry_file(enq_id,image) values ('$last_id','$upd_image')";
       $prd_res=mysqli_query($conn, $sql_prd) or die(mysqli_error());
        }
    }
		echo '<script>alert("Thank You! We Will Get Back To You !!!")</script>';
	}
}

?>
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
            <h2 class="section-heading">Enquiry Now</h2> 
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
         <div class="col-sm-12 col-md-6 col-lg-3"></div>
<div class="col-sm-12 col-md-6 col-lg-6">
<form class="" method="post" name="sentMessage">
    <center><h3 style="color:green;"></h3></center>  
                  <div class="control-group form-group">
                     <div class="controls">
                        <label>Category <span class="text-danger">*</span></label>
                        <select class="form-control" id="cat" name="cat" required="required">
							<option>Select Category</option>
							 <?php
                      $sql_cat= mysqli_query($conn,"select * from category");
                      while($res_cat= mysqli_fetch_array($sql_cat))
                      { 
                      ?>
                      <option value="<?php echo $res_cat['id']; ?>"><?php echo $res_cat['name']; ?></option>
                    <?php } ?>
						</select>
                        <p class="help-block"></p>
                     </div>
                  </div>
				   <div class="control-group form-group">
                     <div class="controls">
                        <label>Business Type <span class="text-danger">*</span></label>
						 <input type="text" placeholder="Business Type" class="form-control"  name="sub_cat" required="required" data-validation-required-message="Please enter Sub-Category.">
                        <p class="help-block"></p>
                     </div>
                  </div>
				  <div class="control-group form-group">
                     <div class="controls">
                        <label>Owner Name <span class="text-danger">*</span></label>
                        <input type="text" placeholder="Full Name" class="form-control" id="name" name="name" required="required" data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                     </div>
                  </div>
				   <div class="control-group form-group">
                     <div class="controls">
                        <label>Shop Name <span class="text-danger">*</span></label>
                        <input type="text" placeholder="Shop Name" class="form-control" name="shop_name" required="required" data-validation-required-message="Please enter shop name.">
                        <p class="help-block"></p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="control-group form-group">
                        <label>Phone Number <span class="text-danger">*</span></label>
                        <div class="controls">
                           <input type="text" placeholder="Phone Number" class="form-control" id="phone" required="required" pattern="[1-9]{1}[0-9]{9}" name="phone" data-validation-required-message="Please enter your phone number.">
                        <div class="help-block"></div></div>
                     </div>
                     <div class="control-group form-group">
                        <div class="controls">
                           <label>Email Address <span class="text-danger">*</span></label>
                           <input type="email" placeholder="Email Address" class="form-control" id="email" required="required" name="email" data-validation-required-message="Please enter your email address.">
                        <div class="help-block"></div></div>
                     </div>
                  </div>
                    
                  <div class="control-group form-group">
                     <div class="controls">
                        <label>Subject <span class="text-danger">*</span></label>
                        <input type="text" placeholder="Subject" class="form-control"  required="required" name="subject" data-validation-required-message="Please enter your Subject.">
                        <p class="help-block"></p>
                     </div>
                  </div> 
                   <div class="control-group form-group">
                     <div class="controls">
                        <label>Upload Images <span class="text-danger">*</span></label>
                        <input type="file" name="files[]" multiple="10" size="60" class="form-control">
                     </div>
                  </div> 
                  
                  <div class="control-group form-group">
                     <div class="controls">
                        <label>Message <span class="text-danger">*</span></label>
                        <textarea rows="4" cols="100" placeholder="Message" name="message" class="form-control" id="message" required="" data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                     <div class="help-block"></div></div>
                  </div>
                  <div id="success"></div>
                  <!-- For success/fail messages -->
                  <button name="submit" value="submit" type="submit" class="btn btn-success">Send Message</button>
               </form>
        
              </div>
      </div>
    </div>
  </section> 

        <?php include("includes/footer.php");?>
		<?php include("includes/js.php");?>
		</body> 
</html>
