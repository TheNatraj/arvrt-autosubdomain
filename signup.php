<?php session_start();
include("includes/db_config.php"); ?>
<?php 
if (isset($_POST['register'])) {
  extract($_POST);
 $email= $_POST['email'];
 $_SESSION['email'] = $email;
 $password= $_POST['password'];
    $sql ="SELECT count(*) as num FROM user_profile WHERE email = '".$email."'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $res= mysqli_fetch_array($result);
    echo  $count=$res['num']; 
    if($count == 0 )
    { 
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
        $sql_qry="INSERT into user_profile(fname,lname,mob_no,email,password,created_date) values ('$firstname','$lastname','$phonenumber','$email','$password','$date')";
    $resultss = mysqli_query($conn, $sql_qry);
    if($resultss) {
      echo '<script>alert("Registration successfully Completed")</script>';
      echo "<script>window.location.href='login.php'</script>"; 
         }
    }else{
        echo '<script>alert("Email Id Already Exits! Please Login")</script>';  
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
	    
  <div id="spinner-area">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
        <div class="spinner-txt">Aryavart</div>
      </div>
    </div>
    <p id="nav-toggle"></p>
    <!-- ***** FULL COUNTDOWN PAGE ***** -->
    <div class="fullrock config sec-bg2 motpath">
      <a onclick="window.history.go(-1); return false;" class="closebtn">
        <img class="svg closer bg-transparent" src="fonts/svg/close.svg" alt="">
      </a>
      <section class="fullrock-content">
        <div class="container">
        <div class="row">
        <div class="col-md-8 offset-md-2">
          <a href="index.php"><img class="svg logo-menu" src="img/aryavart-logo.png" alt="logo Aryavart"></a>
          <div class="sec-main sec-bg1 tabs mb-100">
            <div class="randomline">
              <div class="bigline"></div>
              <div class="smallline"></div>
            </div>
            <h3>Register Here</h3>
            <p class="mb-5">If you are a new customer, please Register if not, <a href="login.php">
            <div class="tabs-header btn-select-customer">
              <ul class="btn-group btn-group-toggle" data-toggle="buttons">
                <li class="btn btn-secondary active mb-2">
                  <input type="radio" name="options" id="option1" checked> Click Login
                </li>
              </ul>
            </div>
			</a>
            <div class="row">
              <div class="col-sm-12">
                <div class="table tabs-item active">
                  <div class="cd-filter-block mb-0">
                     <div class="cd-filter-content">
                      <form action="" method="post" class="comments-form">
                        <div class="row">
                          <div class="col-md-6">
                            <label for="firstname"><i class="fas fa-user-tie"></i></label>
                            <input type="text" name="firstname" id="firstname" placeholder="First Name" required="">
                          </div>
                          <div class="col-md-6">
                            <label for="inputLastName"><i class="fas fa-user-tie"></i></label>
                            <input type="text" name="lastname" id="inputLastName" placeholder="Last Name" required="">
                          </div>
                          <div class="col-md-6 ">
                            <label for="inputEmail"><i class="fas fa-envelope"></i></label>
                            <input type="email" name="email" id="inputEmail" placeholder="Email Address" class="email-search" required="">
                            <div class="alert alert-warning" id="result2" style="display: none;">     </div>
                          </div>
                          <div class="col-md-6">
                            <label for="inputPhone"><i class="fas fa-phone"></i></label>
                            <input type="tel" name="phonenumber" id="inputPhone" placeholder="Phone Number" required="">
                          </div>
                          <div class="col-md-6">
                            <label for="inputPassword"><i class="fa fa-key" aria-hidden="true"></i></label>
                            <input type="password" name="password" id="inputPassword" placeholder="Password" required="">
                          </div>
                          
						  <div class="clearfix"></div>
						  
                          <div class="col-md-12 mt-5">
                            <button type="submit" value="register" name="register" class="btn btn-default-yellow-fill mt-0 mb-1 mr-3 btn-lg">Submit <i class="fas fa-lock"></i>
                            </button>
                             <ul class="list d-inline">
                              <li>
                                <input name="rememberme" type="checkbox" id="checkbox" class="filter">
                               </li>
                            </ul>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </section>
		</div>

        <?php include("includes/footer.php");?>
		<?php include("includes/js.php");?>
		</body>
<script type="text/javascript">
  $(document).ready(function(){
    $(".email-search").keyup(function()
    {
    searchid = $(this).val();
    dataString = 'search2='+ searchid;
    if(searchid!='')
    {
    $.ajax({
    type: "POST",
    url: "reg_validation.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#result2").html(html).show();
    }
    });
    }return false;
    });
    });
</script>
</html>
