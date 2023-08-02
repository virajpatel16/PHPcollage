<?php

$servername="localhost";
$username="root";
$password="";
$databasename="sem5";


$conn=new mysqli($servername,$username,$password,$databasename);

if($conn->connect_error){
die("connection fuiler: $conn->connect_error");
} 




?>

<html>
    <head>
    <link rel="stylesheet" href="display.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <table  class="table-group-divider">
      
                                                                       
<tr>
<th scope="col">id</th>
<th scope="col">firstname</th>

<th scope="col">lastname</th>

<th scope="col">Age</th>

<th scope="col">gender</th>

<th scope="col">Birthday</th>

<th scope="col">sem</th>

<th scope="col">contact</th>

<th scope="col">email</th>

<th scope="col">	password	</th>
</tr>


   
<?php 
$sql="SELECT * FROM stud";
$res=$conn->query($sql);

while($row =mysqli_fetch_assoc($res)){ 
    
    ?>
    <tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["firstName"]; ?></td>
    <td><?php echo $row["lastName"]; ?></td>
    <td><?php echo $row["Age"]; ?></td>
    <td><?php echo $row["gender"]; ?></td>
    <td><?php echo $row["Birthday"]; ?></td>
    <td><?php echo $row["sem"]; ?></td>
    <td><?php echo $row["contact"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
    <td><a href="view.php"><button>view</button></td>
    <td><a href="update.php"><button>Edit</button></td>
    <td><a href="delete.php"><button>delete</button></td>
    </tr>
    <?php } ?>
    

</table>
</body>
</html>
