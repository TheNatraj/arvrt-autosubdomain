<?php session_start();
//print_r($_SESSION);
include("includes/db_config.php"); 
if(isset($_POST['subdms'])){
$subdom= $_POST['subdomains'];
$_SESSION['login_subdomains']=$subdom;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
 $user_id=$_SESSION['id'];
$sql_subd= mysqli_query($conn,"select count(*) as num from user_profile where subdomain_name='".$subdom."'");
$res_subd= mysqli_fetch_array($sql_subd);
if($res_subd['num']== 0) {
  if(!file_exists($subdom)) {
    if(mkdir($subdom, 0777, true)){
if(copy('../includes/db_config.php', '../'.$subdom.'/db_config.php') && copy('../themes/index.php', '../'.$subdom.'/'.$index.'.php') ){
$sqlss ="UPDATE  user_profile  SET subdomain_name='$subdom' WHERE id='".$user_id."'"; 
$rows=mysqli_query($conn,$sqlss) or die(mysqli_error());

        }
      }
   } 
 }
} } else if(isset($_GET['subdm'])){
 $subdom= $_GET['subdm'];
$_SESSION['login_subdomains']=$subdom;
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
$user_id=$_SESSION['id'];
$sql_subd= mysqli_query($conn,"select count(*) as num from user_profile where subdomain_name='".$subdom."'");
$res_subd= mysqli_fetch_array($sql_subd);
if($res_subd['num']== 0) {
  if(!file_exists($subdom)) {
    if(mkdir($subdom, 0777, true)){
if(copy('includes/db_config.php', $subdom.'/db_config.php') && copy('themes/index.php', $subdom.'/index.php') ){
$sqlss ="UPDATE  user_profile  SET subdomain_name='$subdom' WHERE id='".$user_id."'"; 
$rows=mysqli_query($conn,$sqlss) or die(mysqli_error());

   }
   }
   }    
 }
}
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ 
}else{
 header("Location:login.php");  
} 
if (isset($_POST['submit'])) {
extract($_POST);
 date_default_timezone_set('Asia/Kolkata');
 $datetime = date('Y-m-d H:i:s');
 $user_id=$_SESSION['id'];
 $about_us = htmlentities($_POST['about_us']);
 $contact_details = htmlentities($_POST['contact_details']);
    $tmp_file = $_FILES['owner_pic']['tmp_name'];
    $ext = pathinfo($_FILES["owner_pic"]["name"], PATHINFO_EXTENSION);
    $rand = md5(uniqid().rand());
    $owner_pic = $rand.".".$ext;
    move_uploaded_file($tmp_file,"admin/user/theme/".$owner_pic);
    $tmp_file = $_FILES['logo']['tmp_name'];
    $ext = pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);
    $rand = md5(uniqid().rand());
    $logos = $rand.".".$ext;
    move_uploaded_file($tmp_file,"admin/user/theme/".$logos);
    $ip=$_SERVER['REMOTE_ADDR'];
    $sql="INSERT into user_theme_details(user_id,business_type,name,shop_name,contact_no,email,logo,owner_pic,about_us,contact_details,ip_address,created_date) values ('$user_id','$business_type','$name','$shop_name','$phone','$email','$logos','$owner_pic','$about_us','$contact_details','$ip','$datetime')";
      if  (mysqli_query($conn, $sql)) {
          $last_id= mysqli_insert_id($conn);
            if(count($_FILES['sliderfiles']['name']) > 0)  {
            for($i = 0; $i < count($_FILES["sliderfiles"]); $i++){
            $tmp_file = $_FILES['sliderfiles']['tmp_name'][$i];
            $ext = pathinfo($_FILES["sliderfiles"]["name"][$i], PATHINFO_EXTENSION);
            $rand = md5(uniqid().rand());
            $upd_image = $rand.".".$ext;
            move_uploaded_file($tmp_file,"admin/user/theme/".$upd_image);
             $sql_prd="INSERT into slider(theme_id,name,image) values ('$last_id','$slider_text','$upd_image')";
                    $prd_res=mysqli_query($conn, $sql_prd) or die(mysqli_error());
               }
            }
            if(count($_FILES['pimgs']['name']) > 0)  {
            for($i = 0; $i < count($_FILES["pimgs"]); $i++){
            $tmp_file = $_FILES['pimgs']['tmp_name'][$i];
            $ext = pathinfo($_FILES["pimgs"]["name"][$i], PATHINFO_EXTENSION);
            $rand = md5(uniqid().rand());
            $pimgs = $rand.".".$ext;
            move_uploaded_file($tmp_file,"admin/user/theme/".$pimgs);
            $sql_gm="INSERT into gallery_image(theme_id,image) values ('$last_id','$pimgs')";
            $prd_gm=mysqli_query($conn, $sql_gm) or die(mysqli_error());
               }
            }
            if(count($_FILES['our_work']['name']) > 0)  {
            for($i = 0; $i < count($_FILES["our_work"]); $i++){
            $tmp_file = $_FILES['our_work']['tmp_name'][$i];
            $ext = pathinfo($_FILES["our_work"]["name"][$i], PATHINFO_EXTENSION);
            $rand = md5(uniqid().rand());
            $work_image = $rand.".".$ext;
            move_uploaded_file($tmp_file,"admin/user/theme/".$work_image);
             $sql_wk="INSERT into ourwork_images(theme_id,image) values ('$last_id','$work_image')";
              $prd_wk=mysqli_query($conn, $sql_wk) or die(mysqli_error());
               }
            }
            if(count($_POST["tname"]) > 0)  {
              for($i = 0; $i < count($_POST["tname"]); $i++){
             $tname = mysqli_real_escape_string($conn,$_POST['tname'][$i]);
             $designation = mysqli_real_escape_string($conn,$_POST['desgination'][$i]);
             $desp = mysqli_real_escape_string($conn,$_POST['desp'][$i]);
              $sql_tst="INSERT into testimonial(theme_id,name,designation,desp) values ('$last_id','$tname','$designation','$desp')";
              $prd_tst=mysqli_query($conn, $sql_tst) or die(mysqli_error());
            }
          }if(count($_POST["tmname"]) > 0)  {
              for($i = 0; $i < count($_POST["tmname"]); $i++){
             $tmname = mysqli_real_escape_string($conn,$_POST['tmname'][$i]);
             $tmp_file = $_FILES['img']['tmp_name'][$i];
            $ext = pathinfo($_FILES["img"]["name"][$i], PATHINFO_EXTENSION);
            $rand = md5(uniqid().rand());
            $tm_image = $rand.".".$ext;
            move_uploaded_file($tmp_file,"admin/user/theme/".$tm_image);
            $sql_team="INSERT into our_team(theme_id,username,timage) values ('$last_id','$tmname','$tm_image')";
            $prd_tm=mysqli_query($conn, $sql_team) or die(mysqli_error());
            }
          }
       }
         echo "<script>  alert('Data have added successfully!!!'); 
                              location.replace('upload.php');
                          </script>";     
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
  <script type="text/javascript" src='ckeditor/ckeditor.js'></script>
	 <style>
.cdy div{
width:31%;
float:left;
margin:10px;
}  
hr{
  border:1px #e96125 solid!important;
}

</style>
  
      </head>
  <body>
	    
  <?php include("includes/header.php");?> 
  <!-- ***** FEATURES ***** -->
  <section class="services sec-normal motpath sec-bg4">
    <div class="container-fluid">
      <div class="service-wrap">
        <div class="row">
          <div class="col-sm-12 text-left">
            <h2 class="section-heading">Upload Shop Data</h2> 
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
<form class="" method="post" name="sentMessage" enctype="multipart/form-data">
    <center><h3 style="color:green;"></h3></center>  
                  
				   <div class="control-group form-group">
                     <div class="controls">
                        <label>Business Type <span class="text-danger">*</span></label>
						 <input type="text" placeholder="Business Type" class="form-control"  name="business_type" required="required" data-validation-required-message="Please enter Sub-Category.">
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
                  <div class="col-md-6">
                     <div class="control-group form-group">
                        <label>Phone Number <span class="text-danger">*</span></label>
                        <div class="controls">
                           <input type="text" placeholder="Phone Number" class="form-control" id="phone" required="required" pattern="[1-9]{1}[0-9]{9}" name="phone" data-validation-required-message="Please enter your phone number.">
                        <div class="help-block"></div></div>
                     </div>
</div>
 <div class="col-md-6">
                     <div class="control-group form-group">
                        <div class="controls">
                           <label>Email Address <span class="text-danger">*</span></label>
                           <input type="email" placeholder="Email Address" class="form-control" id="email" required="required" name="email" data-validation-required-message="Please enter your email address.">
                        <div class="help-block"></div></div>
                     </div>
                  </div> 
                                   </div>
                   <div class="control-group form-group">
                     <div class="controls">
                        <label>Logo Images </label>
                        <input type="file" name="logo"class="form-control">
                     </div>
                  </div> 
                 
                   <div class="control-group form-group">
                     <div class="controls">
                        <label>Slider Images <span class="text-danger">Size - 1200px X 400px</span></label>
                        <input type="file" name="sliderfiles[]" multiple="10" size="60" class="form-control">
                     </div>
                  </div> 
                 <div class="control-group form-group">
                     <div class="controls">
                        <label>Product /Deal In Images </label>
                        <input type="file" name="pimgs[]" multiple="10" size="60" class="form-control">
                     </div>
                  </div> 
                 
                   <div class="control-group form-group">
                     <div class="controls">
                        <label>Slider Text </label>
                        <input type="text" name="slider_text" class="form-control">
                     </div>
                  </div> 
                 
                   <div class="control-group form-group">
                     <div class="controls">
                        <label>Owner Pic <span class="text-danger">Size - 600px X 400px</span></label>
                        <input type="file" name="owner_pic" class="form-control">
                     </div>
                  </div> 
                 
                  
                  <div class="control-group form-group">
                     <div class="controls">
                        <label>About Us Data <span class="text-danger">*</span></label><br/>
                        <textarea rows="4"   placeholder="Message" name="about_us" class="ckeditor form-control" required="" maxlength="999" style="resize:none"></textarea>
                     <div class="help-block"></div></div>
                  </div>
                  <div class="control-group form-group">
                     <div class="controls">
                        <label>Contact Details <span class="text-danger">*</span></label><br/>
                        <textarea rows="4"  placeholder="Contact Details" name="contact_details" class="ckeditor form-control"  required="" maxlength="999" style="resize:none"></textarea>
                     <div class="help-block"></div></div>
                  </div>
				  
                   <div class="control-group form-group">
                     <div class="controls">
                        <label>Our Work Images <span class="text-danger">Select Multiple Images</span></label>
                        <input type="file" name="our_work[]" multiple="10" size="60" class="form-control">
                     </div>
                  </div> 
                  <div class="clearfix"></div>
                  <h4 style="color:black;margin-top:10px;">Add Testimonials Details</h4>

                  <div class="table-responsive " id="dynamic_field">
                    <table class="table table-bordered">
                      <thead></thead>
                      <tbody>
                        <tr>
                          <td>
                            <strong> Name:</strong><br />
                            <input type="text" name="tname[]" class="form-control" placeholder="Enter Name ">
                          </td>
 </tr>
 <tr>
                          <td>
                            <strong>Desgination:</strong><br />
                            <input type="text" name="desgination[]" class="form-control" placeholder="Enter Desgination">
                          </td>
 </tr>
 <tr>
                          <td>
                            <strong>Description:</strong><br />
                             <textarea name="desp[]" class="form-control" placeholder="Enter Description"> </textarea>
                         </td>
                        </tr>
                      </tbody>  
                    </table> 

                  </div>
                   <div class="clearfix"></div>
                  <div class="col-sm-12">
                    <div class="optionBox mt-10">
                      <div class="block">
                        <button type="button" name="add" id="add" class="btn btn-success">Add More +</button>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <h4 style="color:black;margin-top:10px;">Add Team Details</h4>

                  <div class="table-responsive " id="dynamics_fields">
                    <table class="table table-bordered">
                      <thead></thead>
                      <tbody>
                        <tr>
                          <td>
                            <strong> Name:</strong><br />
                            <input type="text" name="tmname[]" class="form-control" placeholder="Enter Name ">
                          </td>
 </tr>
 <tr>
                          <td>
                            <strong>Image:</strong><br />
                            <input type="file" name="img[]" class="form-control" placeholder="Enter Desgination">
                          </td>
                        </tr>
                      </tbody>  
                    </table>
                    <hr/>

                  </div>
                   <div class="clearfix"></div>
                  <div class="col-sm-12">
                    <div class="optionBox mt-10">
                      <div class="block">
                        <button type="button" name="add_team" id="add_team" class="btn btn-success">Add More Team +</button>
                      </div>
                    </div>
                  </div>
                  <!-- For success/fail messages -->
                  <button name="submit" value="submit" type="submit" class="btn btn-success">Submit</button>
               </form>
        
              </div>
      </div>
    </div>
  </section> 

        <?php include("includes/footer.php");?>
		<?php include("includes/js.php");?>
    <script type="text/javascript">
    $(document).ready(function() {
      var i = 1;
      $('#add').click(function() {
        i++;
         $('#dynamic_field').append('<div id="row'+i+'" class="cdy"><div><strong>Name:</strong><br /><input type="text" name="tname[]" placeholder="Enter Name" class="form-control name_list" /></div><div><strong>Desgination:</strong><br /><input type="text" name="desgination[]" placeholder="Enter Product Size" class="form-control name_list" /></div><div><strong>Description:</strong><br /><textarea name="desp[]" placeholder="Enter Description" class="form-control name_list" ></textarea></div><div style="width:10%; margin-top:30px"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div><div class="clearfix"></div><hr/>'); 
      });
      $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
      });
      $('#submit').click(function() {
        $.ajax({
          url: "upload.php",
          method: "POST",
          data: $('#add_name').serialize(),
          success: function(data) {
            alert(data);
            $('#add_name')[0].reset();
          }
        });
      });
    });
    </script>
	  <script type="text/javascript">
    $(document).ready(function() {
      var i = 1;
      $('#add_team').click(function() {
        i++;
         $('#dynamics_fields').append('<div id="row'+i+'" class="cdy"><div><strong>Name:</strong><br /><input type="text" name="tmname[]" placeholder="Enter Name" class="form-control name_list" /></div><div><strong>Image:</strong><br /><input type="file" name="img[]" class="form-control name_list" /></div><div style="width:10%; margin-top:30px"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div><div class="clearfix"></div><hr/>'); 
      });
      $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
      });
      $('#submit').click(function() {
        $.ajax({
          url: "upload.php",
          method: "POST",
          data: $('#add_name').serialize(),
          success: function(data) {
            alert(data);
            $('#add_name')[0].reset();
          }
        });
      });
    });
    </script>
  	</body> 
</html>
