<?php include('dbcon.php');
if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $age=$_POST['age'];

  $sql="INSERT INTO students (first_name,last_name,age) VALUES ('$fname','$lname','$age')";
$result=mysqli_query($connection,$sql);
if($result){
 // echo "insert succesfully";
 header("location:index.php");
}
else{
  die(mysqli_error());
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Student</title>
</head>
<body>
<div class="container" style="margin: 50px;">
  <form action="" method="post">
    <div>
      <label for="fname" >First Name</label><br><br>
      <input type="text" name="fname" placeholder="Enter your First Name" >
    </div>
    <br>
    <div>
      <label for="lname">Last Name</label><br><br>
      <input type="text"  name="lname" placeholder="Enter your Last Name">
    </div>
    <br>
    <div>
      <label for="age">Age</label><br><br>
      <input type="number" name="age" placeholder="Enter your age">
    </div>
    <br><br><br><br><br>
    <input type="submit" value="Add" name="submit">
  </form>
</div>
  
</body>
</html>