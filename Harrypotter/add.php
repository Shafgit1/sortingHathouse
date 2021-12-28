<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/registration.css">
</head>
<body>
<?php

$server = "ID362514_sortinghat.db.webhosting.be";
$username = "ID362514_sortinghat";
$password = "shafiq123";
$dbname = "ID362514_sortinghat";

// Database connection
$conn = mysqli_connect($server , $username , $password , $dbname) ;


 $fullname = $_POST['fullname'];
 $housename = $_POST['housename'];
 $percentage = $_POST['percentage'];


 

 if($conn->connect_error){
   echo "$conn->connect_error";
   die("Connection Failed : ". $conn->connect_error);
 } else {
   $stmt = $conn->prepare("insert into people(fullname, housename, percentage) values('$fullname', '$housename', '$percentage')");
   $stmt->bind_param("sssssi", $fullname, $housename, $percentage);
   $execval = $stmt->execute();
   echo $execval; 
   echo '<i style="color:red;font-size:30px;font-family:calibri ;">
   Awesome! Your buddy is in the house </i> ';
  ?>
  <form action="housedata.php" > 

 
    <button>
      /People-in-houses/
    </button>

  </form>

  <?php

   
   $stmt->close();
   $conn->close();
 }
?>