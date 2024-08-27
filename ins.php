<?php
$con=mysqli_connect("localhost","root","","student_registration_form");

$fn= $_POST['fname'];
$ln= $_POST['lname'];
$g= $_POST['gender'];
$age= $_POST['age'];
$dob= $_POST['dob'];
$e= $_POST['email'];
$p= $_POST['pass'];
$cp= $_POST['cpass'];
$h= $_POST['Hobbies'];
$ch= $_POST['check'];


$ins="INSERT INTO student1 SET fname='$fn',lname='$ln', gender='$g',age='$age',dob='$dob',email='$e',pass='$p',cpass='$cp',chekee='$ch'";
$con->query($ins);
echo "DATA INSERTED";




 ?>