<?php 
include('config.php');
 ?>

<html>
<head>
<title>STUDENT DETAILS</title>
</head>
<body>

<?php
$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
?>   
<table border="1">
    <thead>
        <tr>
            <th>Enrollment No.</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
    </thead>
    <tbody>
    <?php    
    while($data = $result->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $data['enroll'];?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['age']; ?></td>
        <td><?php echo $data['course']; ?></td>
        <td><?php echo $data['branch']; ?></td>
        <td><?php echo $data['contact']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td> <a href="edit.php?id=<?php echo $data['enroll'];?>">Edit</a> </td>
        <td> <a href="delete.php?id=<?php echo $data['enroll'];?>">Delete</a></td>
    </tr>
    <?php 
} ?>
    </tbody>
    
<?php 
} ?>
</table>   
<a href="details.html">CLICK TO INSERT NEW DETAIL</a>
</body>   
</html>