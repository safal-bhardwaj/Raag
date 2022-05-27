<?php
session_start();
$_SESSION['alert']=0;
if(isset($_POST['upload']))
{
    $file=$_FILES['audiofile'];
    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    
    $dir='/opt/lampp/htdocs/Raag/Raag/homepage/sign/user_dashboard/songs/'.$filename;

    $ifile=$_FILES['image'];
    $ifilename=$ifile['name'];
    $ifilepath=$ifile['tmp_name'];
    
    $idir='/opt/lampp/htdocs/Raag/Raag/homepage/sign/user_dashboard/song_images/'.$ifilename;

    if(move_uploaded_file($filepath,$dir) && move_uploaded_file($ifilepath,$idir) )
    {
        $_SESSION['alert']=1;
        $servername = "localhost";
    $uname = "root";
    $password = "";
    $dbname = "Raag";
    
    // Create connection
    $conn = mysqli_connect($servername,$uname,$password,$dbname);
    
    $username = $_SESSION['id'];
    $musicname = $_POST['musicname'];
    $artist = $_POST['artist'];
    $music=$_POST['music'];
  
    $i_file=$idir;
    $m_file=$dir;
    
    
    $sql = "INSERT INTO songs (username,musicname,artist,music,image,m_file) VALUES ('$username','$musicname','$artist','$music','$i_file','$m_file')";
    $conn->query($sql);
    $id_query = "SELECT max(m_id) from songs ";
    $res= mysqli_query($conn,$id_query,MYSQLI_USE_RESULT);
        $row = mysqli_fetch_row($res);
        $id=$row[0];
    $img=basename($i_file);
    $src=basename($m_file,".mp3");
    
    $myfil = fopen("MusicFile.txt", "a") or die("Unable to open file!");
$txt ="{ name:'$musicname', artist: '$artist' , img:'$img' , src:`$src`, id:'a$id' }, ";
fwrite($myfil, $txt);
fclose($myfil);
    
    
    $conn->close();
    }
    else{
        $_SESSION['alert']=0;
    }
    
    
    

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="uploadstyle.css">
    <title>Upload</title>
</head>
<script>
    var a = <?php echo $_SESSION['alert'];?>;
    if(a==1)
    {
        alert('Uploaded Successfully');
    }

</script>
<body>
<center><img src="Logo_RAAG_1.png" alt="Logo" width="180px" height="125px"></center>

    <center>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <br>
        <br>
        <label for="musicname">Music Name : </label>
        <input type="text" name="musicname" required>
        <br>
        <br>
        <label for="artist">Artist Name : </label>
        <input type="text" name="artist" required>
        <br>
        <br>
        <label for="music"> Type of your music : </label>
        <select name="music" id="music">
            <option value="Indian Classical"> Indian Classical</option>
            <option value="Western Classical"> Western Classical</option>
            <option value="Funk">Funk</option>
            <option value="Trap">Trap</option>
            <option value="Hip-Hop">Hip-Hop</option>
            <option value="Blues">Blues</option>
            <option value="Pop">Pop</option>
            <option value="Country">Country</option>
            <option value="Dance">Dance</option>
            <option value="Jazz">Jazz</option>
            <option selected value="Other">Other</option>
        </select>
        <br>
        <br>
        <label for="image">Upload Music Image : </label>
        <input type="file" id="myFile" name="image" required>
        <br>
        <br>
        <label for="musicfile">Upload Music file (.mp3 only) : </label>
        <input type="file" id="myFile" name="audiofile" required>
        <br>
        <br>
        <input type="submit" value="upload"name="upload">
        <br>
        <br>
      </form>
    </center>
</body>
</html>