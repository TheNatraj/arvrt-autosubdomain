<?php session_start();
include("includes/db_config.php"); ?>
<?php 
if(isset($_POST["login"])) 
{    
      //var_dump($_POST);exit();
    $email = $_POST["email"]; 
    $password = $_POST["password"]; 
    $email = stripslashes($email);
    $password = stripslashes($password);
    $sql ="SELECT count(*) as num FROM user_profile WHERE email = '".$email."' AND  password = '".$password."'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $res= mysqli_fetch_array($result);
    $count=$res['num']; 
    if($count > 0 )
    { 
   $_SESSION['loggedin'] = true;
   $sql1="select id,email from user_profile where email='".$email."'";
   $result1 = mysqli_query($conn, $sql1);
   $res1= mysqli_fetch_array($result1);
   $_SESSION['id']=$res1['id'];
   echo $user_id=$_SESSION['id'];
   echo '<script>alert("Login successfully")</script>';
    echo "<script>window.location.href='index.php'</script>";  
   //header("location:index.php");
  }
else
{   
  echo '<script>alert("The username or password are incorrect!")</script>';
}
} ?>
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
        <div class="col-md-6 offset-md-3">
          <a href="index.php"><img class="svg logo-menu" src="img/aryavart-logo.png" alt="logo Aryavart"></a>
          <div class="sec-main sec-bg1 tabs mb-100">
            <div class="randomline">
              <div class="bigline"></div>
              <div class="smallline"></div>
            </div>
            <h3>Login</h3>
            <p class="mb-5">If you are a returning customer, please Login if not, <a href="signup.php">
            <div class="tabs-header btn-select-customer">
              <ul class="btn-group btn-group-toggle" data-toggle="buttons">
                <li class="btn btn-secondary active mb-2">
                  <input type="radio" name="options" id="option1" checked> create a new account.
                </li>
              </ul>
            </div>
			</a>
            <div class="row">
              <div class="col-sm-12">
                <div class="table tabs-item active">
                  <div class="cd-filter-block mb-0">
                    <h4 class="m-0">Existing Customer Login</h4>
                    <div class="cd-filter-content">
                      <form action="" method="post" class="comments-form">
                        <div class="row">
                          <div class="col-md-12">
                            <label><i class="fas fa-envelope"></i></label>
                            <input type="email" name="email" class="email-login" placeholder="Enter Email Id" required>
                             <div class="alert alert-warning" id="result" style="display: none;">     </div>
                          </div>
						           <div class="clearfix"></div>
                          <div class="col-md-12">
                            <label><i class="fas fa-lock"></i></label>
                            <input  name="password" type="password" style="" required="" placeholder="Enter password">
                          </div>

						  <!-- <div class="form-group pb-5 mb-5 mt-5">
							  <span class="pull-left" style="color: #33475b; font-weight: 500; font-size: 14px;">Didn't Receive the OTP?</span>
							  <span class="pull-right"><button type="button" name="submit" class="btn btn-warning" id="btnonOtp1" style="background-color:#2a1871;color:#fff;">Resend OTP</button></span>
						  </div> -->
                          <div class="col-md-12 mt-5">
                            <button type="submit" value="login" name="login" class="btn btn-default-yellow-fill mt-0 mb-1 mr-3">Login <i class="fas fa-lock"></i>
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
    $(".email-login").keyup(function()
    {
    searchid = $(this).val();
    dataString = 'search='+ searchid;
    if(searchid!='')
    {
    $.ajax({
    type: "POST",
    url: "reg_validation.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#result").html(html).show();
    }
    });
    }return false;
    });
    });
</script>    
</html>
