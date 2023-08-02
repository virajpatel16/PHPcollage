<?php

$servername="localhost";
$username="root";
$password="";
$databasename="sem5";


$conn=new mysqli($servername,$username,$password,$databasename);

if($conn->connect_error){
die("connection fuiler: $conn->connect_error");
} 
 $sql="UPDATE stud SET lastName='viraj',firstName='gondaliya',Age='19',gender='male',Birthday='1999-2-1',sem='2nd',contact='228777',email='virj@gmail.com',password='wewrww' WHERE id=6 ";
if($conn -> multi_query($sql) === true){
    echo "update succesfully";
   
}
else{
    echo "Error: ".$sql . "<br>".$conn->error;

}
$conn->close();


?>


