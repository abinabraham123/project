
</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
       
} 
else {
    echo "success";
}
//function NewUser() {
    
$userName = $_REQUEST['name']; 
$email = $_REQUEST['email'];
$password = $_REQUEST['pwd']; 
$password1 = $_REQUEST['pwd-repeat']; 
$query = "INSERT INTO `register`(`name`, `email`, `password`, `password1`) VALUES (\"$userName\",\"$email\",\"$password\",\"$password1\")";
$data = mysqli_query($conn,$query);
       if($data) {
           mysqli_close($conn);
          echo "registered";
       }
        else{
            echo "failed";
        }
 





?>
</body>
</html>
