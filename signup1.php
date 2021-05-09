<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aryavart</title>
    <meta name="description" content="">
  <?php include("includes/css.php");?>
<script src="https://unpkg.com/cotter@0.3.17/dist/cotter.min.js" type="text/javascript"></script>
      </head>
     
  <body>
	    
  <div id="spinner-area">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
        <div class="spinner-txt">Aryavart...</div>
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
          <a href="index.php"><img class="svg logo-menu" src="img/logo-light.svg" alt="logo Antler"></a>
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
              <!-- 2️⃣ Setup a div to contain the form -->
<div id="cotter-form-container" style="width: 300px; height: 300px;"></div>
              </div>
            </div>
          </div>
        </section>
		</div>
<!-- 3️⃣ Show the form -->
<script>
  /*var cotter = new Cotter("191b3fb9-1662-4d31-91f7-52b15830adde"); // 👈 Specify your API KEY ID here

  cotter
    .signInWithLink() // use .signInWithOTP() to send an OTP
    .showEmailForm()  // use .showPhoneForm() to send magic link to a phone number 
    .then(payload => {
    // Read what Cotter Returns
    var respDiv = document.getElementById("user-response");
    respDiv.innerHTML = `<pre>${JSON.stringify(payload, null, 4)}</pre>`;
  });*/

var cotter = new Cotter("191b3fb9-1662-4d31-91f7-52b15830adde");

cotter
  .signInWithLink()
  .showEmailForm() 
  .then(payload => {
    console.log("Cotter User Information", payload);
    
  // TODO: Login to Server
  axios
    .post("http://localhost/adminextra/login.php", payload)
    .then((resp) => console.log("Response From Server", resp))
    .catch((err) => console.log(err));
  })
  .catch(err => console.log(err));

</script>
    <?php include("includes/footer.php");?>
		<?php include("includes/js.php");?>
		</body>




</html>
