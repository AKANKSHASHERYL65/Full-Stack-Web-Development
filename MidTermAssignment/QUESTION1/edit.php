<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>


<?php $enroll=$_GET['enroll'];
?>

<?php

if (!empty($enroll))
{ 
include 'config.php';

  $sql =  "SELECT * FROM details where enroll=$enroll";
   $result=mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result);
   if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
}
?>

<form action="update.php?enroll=<?php echo $enroll; ?>" method="POST">

   EnrollmentNo:<input type="text" value="<?php echo $row['enroll']; ?>" name="enroll" ><br>
   
   Name:<input type="text" value="<?php echo $row['name']; ?>" name="name" required id="name"><br>
     
   Age:<input type="Age" value="<?php echo $row['age']; ?>" name="age" required id="age"><br>

   Course:<input type="text" value="<?php echo $row['course']; ?>" name="course" required id="course"><br>

   Branch:<input type="text" value="<?php echo $row['branch']; ?>" name="branch" required id="branch"><br>

   Contact:<input type="text" value="<?php echo $row['contact']; ?>" name="contact" required id="contact"><br>

   Email:<input type="email" value="<?php echo $row['email']; ?>" name="email" required id="email"><br>

     <button type="submit"  id="btn">Submit</button>
    
</form>

</body>
</html>