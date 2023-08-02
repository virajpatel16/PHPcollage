<?php 


include('conn.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="display.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>

<table>
<thead>
</thead>
      <tbody>   


    <?php

     $sql="SELECT * FROM stud";
     $res=mysqli_query($conn,$sql);

     while($row = mysqli_fetch_assoc($res)){


     
     ?>
     <tr>
  <td><?php echo $row['id'];?></td>
  <td><?php echo $row['firstName'];?></td>
  <td><?php echo $row['lastName'];?></td>
  <td><?php echo $row['Age'];?></td>
  <td><?php echo $row['gender'];?></td>
  <td><?php echo $row['Birthday'];?></td>
  <td><?php echo $row['sem'];?></td>
  <td><?php echo $row['contact'];?></td>
  <td><?php echo $row['email'];?></td>
  <td><?php echo $row['password'];?></td>
  
  <td><a href="update.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-outline-primary">Edit</button></a>
  
  <td><a href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-outline-primary">Delete</button></a></td>
   <?php }?>
     </tr>
      </tbody>
   </table>
</body>
</html>