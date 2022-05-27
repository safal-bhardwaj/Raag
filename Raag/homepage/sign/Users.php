<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_sign.css">
    <title> Sign Up | Raag</title>
</head>
<body>
<center><img src="Logo_RAAG_1.png" alt="Logo" width="180px" height="125px"></center>
<br>
<br>
<form action="sign_in_page.php">
<?php
if(isset($_POST["Submit"]))
{
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "Raag";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$username = $_POST["username"];
$password = $_POST["password"];
$name = $_POST["Name"];
$email = $_POST["Email"];
$age = $_POST["age"];
$music = $_POST["music"];

$sql = "INSERT INTO users (username,password,Name,Email,age,music) VALUES ('$username' , '$password', '$name' , '$email' , $age ,'$music')";

if ( $conn->query($sql)) {
  echo "<center><br>All done!!! <br></center>";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

$conn->close();
}
?>
<br>
 <button class="but" type="submit" value="Sign In ">Sign In</button>
</form>
    
</body>
</html>



