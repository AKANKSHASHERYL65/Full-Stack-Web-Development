<?php
include('config.php');
?>


<?php 
if (isset($_POST['btn']))

{


	$sql  = "INSERT INTO `student` (enroll_no, name, age, course, branch, contact, email) 
    VALUES ('$enroll_no', '$name', '$age', '$course', '$branch', '$contact', '$email')";
    mysqli_query($conn, $sql);
    header("Location:display.php");


}

?>