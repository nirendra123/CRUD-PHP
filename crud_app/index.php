
    <?php include('header.php');?>
    <?php include('dbcon.php');?>

    <div class="box1">
    <h2>ALL STUDENTS</h2>
    <button ><a href="add.php">Add student</a></button>
     </div>
   
   <div class="box2">
  <table >

    <thead>
      <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
      <th>Operation</th>

      </tr>

    </thead>
    <tbody>
      <?php 
      $query="select * from students";
      $result=mysqli_query($connection,$query);
      if(!$result){
        die("database failed".mysqli_error());
      }
      else{
       while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $age=$row['age'];
        ?>
        <div class="row">
         
          

        <tr>
        <td><?php  echo $row['id'];?></td>
        <td><?php  echo $row['first_name'];?></td>
        <td><?php  echo $row['last_name'];?></td>
        <td><?php  echo $row['age'];?></td>
        <td><button><a href="delete.php?deleteid=<?php echo $id;?>">Delete</a></button>;<button><a href="update.php?updateid=<?php echo $id;?>">Update</a></button></td>
       
      </tr>
     
        </div>
        

     


        <?php
      }
    }
      
      ?>
     

    </tbody>
  </table>
  </div>

  <div id="modal" class="modal">
  <div class="modal-content">
  <h2>Student Detail</h2>
  <hr>
    <div class="form-group">
     
        First Name: <br><input type="text" name="f_name"><br>
        Last Name: <br><input type="text" name="l_name"><br>
        Age: <br><input type="number" name="age"><br>
        <br>
        <input type="button" value="Add">

    </div>
   
   
    <button id="modal-close">Close</button>
  </div>
</div>

  
  <?php include('footer.php');?>

 