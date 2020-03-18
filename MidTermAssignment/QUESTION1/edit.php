<?php
include('config.php');
?>


<?php 
$enroll_no=$_GET["enroll_no"];
?>

<?php
    $sql = "SELECT * FROM `student` WHERE enroll_no='$enroll_no'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $name = $data['name'];
    $age = $data['age'];
    $course = $data['course'];
    $branch = $data['branch'];
    $contact = $data['contact'];
    $email = $data['email'];
?>

<?php
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $sql = "UPDATE `student` SET name='$name', age='$age', course='$course', branch='$branch', contact='$contact', email='$email' WHERE enroll_no='$enroll_no'";
    if(mysqli_query($conn, $sql)){
        echo "Data Updation Successfull";
    }
    else{
        echo "Data Updation Failed";
    }
}
else{
    echo "Please click update button";
}
?>

<html>
    <head>
    <title>Student Detail</title>
    </head>
    
    <body>
    <form action="edit.php?enroll_no=<?php echo $enroll_no ?>" method="post">
      Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
      Age:<input type="text" name="age"  value="<?php echo $age; ?>" placeholder="Enter Age"><br>
      Course:<input type="text" name="course" value="<?php echo $course; ?>" placeholder="Enter Age"><br>
      Branch: <input type="text" name="branch" value="<?php echo $branch; ?>" placeholder="Enter Age"><br>
      Contact:<input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="Enter Age"><br>
      Email: <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Age"><br>
      <input type="submit" name='btn' value="Update">
    </form>
    </body>
</html>