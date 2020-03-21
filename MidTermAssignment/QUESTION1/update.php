<?php
$enroll = $_POST['enroll'];
$branch = $_POST['branch'];
$course = $_POST['course'];
$name = $_POST['name'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$enroll=$_GET['enroll'];


if (!empty($name) || !empty($age) ||  !empty($contact)  || !empty($email)|| !empty($enroll)|| !empty($branch)|| !empty($course)) {
include 'config.php';

  $sql="UPDATE details SET  branch='$branch',course='$course', enroll='$enroll', name = '$name',age='$age',contact='$contact',email='$email' WHERE enroll=$enroll;";
  if($conn->query($sql)){
    header("location:details.php");
  }
  else
  {
    echo "data updation fail";
  }
  }
 else {
 echo "All field are required";
}
?>