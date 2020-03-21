<?php
$enroll = $_POST['enroll'];
$branch = $_POST['branch'];
$course = $_POST['course'];
$name = $_POST['name'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$email = $_POST['email'];

if (!empty($name) || !empty($age) ||  !empty($contact)  || !empty($email)|| !empty($enroll)|| !empty($branch)|| !empty($course)) {
include 'config.php';

  $sql="INSERT INTO student(enroll,name,age,course,branch,contact,email)values ('$enroll','$name','$age','$course','$branch','$contact','$email')";
  if($conn->query($sql)){
    header("location:display.php");
  }
  else
  {
    echo "data insertion fail";
  }
  }
 else {
 echo "All field are required";
}


 ?>