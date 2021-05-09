<?php
session_start();
include("includes/db_config.php"); 
if(isset($_POST['search2'])){	
$search2= $_POST['search2'];
$sqlll2 = mysqli_query($conn,"SELECT * from user_profile where email ='$search2' ") or die (mysql_error());
if(mysqli_num_rows($sqlll2)>0){
echo "<b>".$search2."Email Id Already Exists!";
}else{
}
}

/*if(isset($_POST['search'])){	
$searchs= $_POST['search'];
$sqlll = mysqli_query($conn,"SELECT * from user_profile where mob_no ='$searchs' ") or die (mysql_error());
if(mysqli_num_rows($sqlll)>0){
echo "<b>".$search."Email Id Already Exists!";
}else{
}
}*/
 
if(isset($_POST['search'])){
	$search= $_POST['search'];
$sqlll2 = mysqli_query($conn,"SELECT * from user_profile where email ='$search' ") or die (mysql_error());
if(mysqli_num_rows($sqlll2)>0){
echo "";
}else{
	echo "<b>".$search."Email Id Doesn't Exist Please Register!.";
}
}
?>