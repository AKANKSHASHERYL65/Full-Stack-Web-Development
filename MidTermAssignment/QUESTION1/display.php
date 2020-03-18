<?php
include('config.php');
?>

<?php 
if (isset($_POST['btn']))

{
 echo "Dear, ".$_POST['name']." You are Welcome.".'<br>';
 echo $enroll_no = $_POST['enroll_no'];
 echo $age = $_POST['age'];
 echo $course = $_POST['course'];
 echo $branch = $_POST['branch'];
 echo $contact = $_POST['contact'];
 echo $email = $_POST['email'];    


	$sql  = "INSERT INTO `student` (enroll_no, name, age, course, branch, contact, email) 
    VALUES ('$enroll_no', '$name', '$age', '$course', '$branch', '$contact', '$email')";
    mysqli_query($conn, $sql);
    header("Location:display.php");
}
?>