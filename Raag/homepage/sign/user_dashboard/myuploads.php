<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="uploadstyle.css">

    <title> <?php echo $_SESSION['id']; ?> | My Uploads</title>
</head>
<body>
<center><img src="Logo_RAAG_1.png" alt="Logo" width="180px" height="125px"></center>
    <center><h1>My Uploads</h1><center>
    <?php
    $id=$_SESSION['id'];
    $servername = "localhost";
    $uname = "root";
    $password = "";
    $dbname = "Raag";
    
    // Create connection
    $conn = mysqli_connect($servername,$uname,$password,$dbname);

    $query= "SELECT * from songs where username='$id'";
    $res= mysqli_query($conn,$query);
    
    if ($res->num_rows > 0) {
       
        while($row = $res->fetch_assoc()) {
            $image=basename($row['image']);
            echo "<br>";
            echo "<br>";
           echo "<div style = 'background-color : #000 ; text-align : center ;'>";
           echo"<br>";
           echo '<img src="song_images/'.$image.'" width : "130px" height ="130 px">';
            echo "<h2>Song : ".$row['musicname']."<br>Artist : ".$row['artist']."</h2>
           </div>";
          }
    }
    else {
            echo "<br><h1>0 results</h1>";
        }
        
        
        $conn->close();
    ?>
</body>
</html>