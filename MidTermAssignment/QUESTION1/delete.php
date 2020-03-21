<?php

$enroll = ''; 
if( isset( $_GET['enroll'])) {
    $enroll = $_GET['enroll']; 
} 

if (!empty($enroll)){ 
include 'config.php';

  $sql=" delete from details where enroll=$enroll";
  if($conn->query($sql)){
    header("location:display.php");
  }
  else
  {
    echo "Data deletion failed";
  }
}
 else {
 echo "Enrollment no. not reached";
}

?>