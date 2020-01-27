<?php
if (isset($_POST['btn'])){

echo "your details are";
echo $_POST['id'];
echo $_POST['username'];
echo $_POST['age'];
echo $_POST['contact'];

}

?>
<html>
   <head>
   <title>Input Form</title> 
   </head>
   
   <body>

   	<form action="phpInput.php" method="post">
   		ID: <input name="id", type="text"
   		placeholder="Enter ID"><br>
   		Name: <input type="text" name="username" placeholder="enter name"><br>
   		Age: <input type="text" name="age" placeholder="enter age"><br>
   		Contact: <input type="text" name="contact" placeholder="enter contact"><br>
   	    <input value="submit" name="btn" type="submit">
        
    </form>
    </body>
</html>