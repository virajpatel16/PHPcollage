<?php 
$servername="localhost";
$username="root";
$password="";
$databasename="sem5";

$conn=new mysqli($servername,$username,$password,$databasename);

if($conn->connect_error){
die("connection fuiler: $conn->connect_error");
} 
$sql="DELETE FROM stud WHERE id=4";


if($conn -> multi_query($sql) === true){
    echo "Delete succesfully";
   
}
else{
    echo "Error: ".$sql . "<br>".$conn->error;

}
$conn->close();


?>





















