<?php
$db = mysqli_connect('127.0.0.1', 'root', 'root', 'vedant_contact');
if($_POST['action']=='submit_emi')
{
  
  $uname = $_POST['uname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  
   $query = "INSERT INTO emi_data (uname, mobile, email) VALUES ('"+$uname+"','"+$mobile+"','"+$email+"')";
      mysqli_query($db, $query);
      echo 'success';
}



?>