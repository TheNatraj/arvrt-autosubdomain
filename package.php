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
	   <style>
 
.panel
{
    text-align: center;
	border: 1px solid  #d6e9c6;
}
.panel:hover { box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4), 0 1px 5px rgba(130, 130, 130, 0.35); }
.panel-body
{
    padding: 0px;
    text-align: center;
}

.the-price
{
    background-color: rgba(220,220,220,.17);
    box-shadow: 0 1px 0 #dcdcdc, inset 0 1px 0 #fff;
    padding: 20px;
    margin: 0;
}

.the-price h1
{
    line-height: 1em;
    padding: 0;
    margin: 0;
}

.subscript
{
    font-size: 25px;
}

/* CSS-only ribbon styles    */
.cnrflash
{
    /*Position correctly within container*/
    position: absolute;
    top: -9px;
    right: 4px;
    z-index: 1; /*Set overflow to hidden, to mask inner square*/
    overflow: hidden; /*Set size and add subtle rounding  		to soften edges*/
    width: 100px;
    height: 100px;
    border-radius: 3px 5px 3px 0;
}
.cnrflash-inner
{
    /*Set position, make larger then 			container and rotate 45 degrees*/
    position: absolute;
    bottom: 0;
    right: 0;
    width: 145px;
    height: 145px;
    -ms-transform: rotate(45deg); /* IE 9 */
    -o-transform: rotate(45deg); /* Opera */
    -moz-transform: rotate(45deg); /* Firefox */
    -webkit-transform: rotate(45deg); /* Safari and Chrome */
    -webkit-transform-origin: 100% 100%; /*Purely decorative effects to add texture and stuff*/ /* Safari and Chrome */
    -ms-transform-origin: 100% 100%;  /* IE 9 */
    -o-transform-origin: 100% 100%; /* Opera */
    -moz-transform-origin: 100% 100%; /* Firefox */
    background-image: linear-gradient(90deg, transparent 50%, rgba(255,255,255,.1) 50%), linear-gradient(0deg, transparent 0%, rgba(1,1,1,.2) 50%);
    background-size: 4px,auto, auto,auto;
    background-color: #aa0101;
    box-shadow: 0 3px 3px 0 rgba(1,1,1,.5), 0 1px 0 0 rgba(1,1,1,.5), inset 0 -1px 8px 0 rgba(255,255,255,.3), inset 0 -1px 0 0 rgba(255,255,255,.2);
}
.cnrflash-inner:before, .cnrflash-inner:after
{
    /*Use the border triangle trick to make  				it look like the ribbon wraps round it's 				container*/
    content: " ";
    display: block;
    position: absolute;
    bottom: -16px;
    width: 0;
    height: 0;
    border: 8px solid #800000;
}
.cnrflash-inner:before
{
    left: 1px;
    border-bottom-color: transparent;
    border-right-color: transparent;
}
.cnrflash-inner:after
{
    right: 0;
    border-bottom-color: transparent;
    border-left-color: transparent;
}
.cnrflash-label
{
    /*Make the label look nice*/
    position: absolute;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    padding-bottom: 5px;
    color: #fff;
    text-shadow: 0 1px 1px rgba(1,1,1,.8);
    font-size: 0.95em;
    font-weight: bold;
    text-align: center;
}

	   </style>
      </head>
  <body>
  
   <?php include("includes/header.php");?> 
 <!-- ***** BANNER ***** -->
  <div class="top-header item7 overlay scrollme animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="1" data-translatey="-50">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="wrapper">
            <h1 class="heading">Dedicated Servers</h1>
            <h3 class="subheading">High performance dedicated servers with cloud flexibility and scalability.<br>
            <a href="#features" class="golink gocheck"> <small>Features</small> </a> <small class="c-white">&#9679;</small>
            <a href="#addons" class="golink gocheck"> <small>Add-Ons</small> </a> <small class="c-white">&#9679;</small>
            <a href="#highlights" class="golink gocheck"> <small>Highlights</small></a>
            </h3>
            <a class="btn btn-default-pink-fill cd-filter-trigger wow animated shake delay-2s"><i class="fa fa-filter"></i> Show Filter</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** CONTROLS ***** -->
  <div class="sec-main sec-bg1">
           <div class="row">
            <div class="col-sm-12">
              
<div class="container">
    <div class="row">
<?php
$sql="select plan_pricing.* from plan_pricing ";
$result = mysqli_query($conn, $sql);
while($res= mysqli_fetch_array($result)){ ?>
         <div class="col-xs-12 col-md-3">
            <div class="panel panel-primary">
                <div class="cnrflash">
                   <?php  if($res['most_popular']==1){ ?>
                    <div class="cnrflash-inner">
                        <span class="cnrflash-label">Hot 
                            <br>
                            Package</span>
                    </div><?php } ?>
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">
                      <?php echo $res['plan_name']; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="the-price">
                        <h1>Rs. <?php echo $res['plan_price']; ?></h1>
                        <small><?php echo $res['duration']; ?></small>
                    </div>
                    <table class="table">
                   <?php     
                     $sql_serv="select * from plan_text where plan_text.plan_id={$res["id"]}";
                     $res_srv = mysqli_query($conn, $sql_serv);
                     while($resss= mysqli_fetch_array($res_srv))
                        { 
                     ?>
                      <tr>
                            <td>
                               <?php echo $resss['plantext']; ?>
                            </td>
                        </tr><?php } ?>
                    </table>
                </div>
                <div class="panel-footer">
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                    <a href="#" class="btn btn-success" role="button">Pay Now</a><?php } else{ ?>
                    <a href="signup.php" class="btn btn-success" role="button">Sign Up</a><?php } ?>
                    <?php //echo $res['duration']; ?></div>
            </div>
        </div><?php } ?>
 
    </div>
</div>
 
 
 </div>
          </div>
        </div> 
		    <?php include("includes/footer.php");?>
		<?php include("includes/js.php");?>
		</body> 
</html>