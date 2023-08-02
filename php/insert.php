<?php



$conn = mysqli_connect("localhost","root","","sem5");

if($conn === false){
die("connection fuiler:" . mysqli_connect_error());
} 
$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$Age = $_REQUEST['Age'];
$gender = $_REQUEST['gender'];
$Birthday = $_REQUEST['Birthday'];
$sem = $_REQUEST['sem'];
$contact = $_REQUEST['contact'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$sql = "INSERT INTO stud(firstName,lastName,Age,gender,Birthday,sem,contact,email,password) VALUES('$firstName','$lastName','$Age','$gender','$Birthday','$sem','$contact','$email','$password')";
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database succesfully</h3>";
    
}
else{
    echo "Error: .$sql" . mysqli_error($conn);

}
mysqli_close($conn)


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information</title>
    
</head>
<body style="text-align: center;">

<h1>information</h1>
<form method="POST">

first name:<input type="text" name="firstName">
<br>

last name:<input type="text" name="lastName">
<br>
Age :<input type="number" name="Age">
<br>
<br>
<br>
gender
<br>
male:
<input type="radio" name="gender"><br>
famale:
<input type="radio" name="gender">
<br>

Birthdate:<input type="text" name="Birthday">
<br>
<br>
sem:
<br>
1st<input type="checkbox" name="sem">
<br>
2nd<input type="checkbox" name="sem">
<br>
3nd<input type="checkbox" name="sem">
<br>
<br>
contact:<input type="number" name="contact">
<br>
email:<input type="email" name="email">
<br>
password<input type="password" name="password">

<br>
<br>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</body>
</html>