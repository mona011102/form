<?php
// Handle the form submission here
if($_SERVER['REQUEST_METHOD']=='POST'){
  
   $email= $_POST['email'];
   $Firstname= $_POST['Firstname'];
   $Lastname= $_POST['Lastname'];
   $category= $_POST['category'];
   $textarea= $_POST['textarea'];
   $ratings= $_POST['ratings'];

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'feedback';
$con = new mysqli($servername, $username,$password,$database);
   if($con) {
    $sql ="insert into feedbackform(email,Firstname,Lastname,category,textarea,ratings)values('$email','$Firstname','$Lastname','$category','$textarea','$ratings') ";
    $result=mysqli_query($con,$sql);
    
    
    if($result){
    
      echo"Your feedback is submitted successfully";
   }
      
    } else{
      die(mysqli_error($con));
    }
    $query = "SELECT id FROM feedbackform ORDER BY id DESC LIMIT 1";
    $result1 = mysqli_query($con, $query);
    
    // Check if there are rows in the result
    if (mysqli_num_rows($result1) > 0) {
        // Fetch the latest row
        $row = mysqli_fetch_assoc($result1);
        // Access the 'id' column and display it
        echo "YOUR ID: " . $row['id'] . "<br>";
    } else {
        echo "No records found.";
    }
    
    }
 
?>