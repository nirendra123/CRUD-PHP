<?php include('dbcon.php');

$updateid=$_GET['updateid'];
$sql="select * from students where id='$updateid'";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$age=$row['age'];


if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $age=$_POST['age'];

  $sql="update students set first_name='$fname',last_name='$lname',age='$age' where id='$updateid'";
$result=mysqli_query($connection,$sql);
if($result){
//echo "update  succesfully";
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
  <title>Update</title>
</head>
<body>
<div class="container" style="margin: 50px;">
  <form action="" method="post">
    <div>
      <label for="fname" value= >First Name</label><br><br>
      <input type="text" name="fname"  value=<?php echo $first_name?>  >
    </div>
    <br>
    <div>
      <label for="lname">Last Name</label><br><br>
      <input type="text"  name="lname"  value=<?php echo $last_name?> >
    </div>
    <br>
    <div>
      <label for="age">Age</label><br><br>
      <input type="number" name="age" value=<?php echo $age?>>
    </div>
    <br><br><br><br><br>
    <input type="submit" value="Update" name="submit">
  </form>
</div>
  
</body>
</html>



