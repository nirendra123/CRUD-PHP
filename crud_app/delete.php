<?php include('dbcon.php');
if(isset($_GET['deleteid'])){
$deleteid=$_GET['deleteid'];

$sql="delete from students where id=$deleteid";
$result=mysqli_query($connection,$sql);
if($result){
  echo "delete successfully";
}
else{
  die(mysqli_error($connection));
}
}


header("location:index.php");