<?php
$db = mysqli_connect('127.0.0.1', 'root', 'root', 'vedant_contact');
if($_POST['action']=='submit_contact')
{
  
  $name = $_POST['text1'];
  $emailaddress = $_POST['text2'];
  $subject = $_POST['text3'];
  $message=$_POST['text4'];
   $query = "INSERT INTO contact_data (name, emailaddress, subject, message) VALUES ('$name','$emailaddress','$subject','$message')";
      mysqli_query($db, $query);
      echo 'success';
}



?>