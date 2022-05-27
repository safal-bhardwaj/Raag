
<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_SESSION["id"] ;?> | Raag</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<script>
  var a = <?php echo $_SESSION['alert']?>;
    if(a==1)
    {
        alert("Welcome <?php echo $_SESSION['id'] ?>");
    }
    <?php $_SESSION['alert']=0 ?>
  </script>
<body>
<center><img src="Logo_RAAG_1.png" alt="Logo" width="180px" height="125px"></center>
    <br>
    <br>
   
   <div class="nav">
       <a href="logout.php"><?php echo $_SESSION["id"] ;?> </a>
       <a href="myuploads.php">My Uploads</a>
       <a href="upload.php"> Upload New</a>
   </div>
   <br>
   <br>
   <div class=music_box>
       <br>
       <br>
       <br>
   <center>

  <div class="wrapper">
    <div class="top-bar">
      <i class="material-icons">expand_more</i>
      <span>Now Playing</span>
      <i class="material-icons">more_horiz</i>
    </div>
    <div class="img-area">
      <img src="" alt="">
    </div>
    <div class="song-details">
      <p class="name"></p>
      <p class="artist"></p>
    </div>
    <div class="progress-area">
      <div class="progress-bar">
        <audio id="main-audio" src=""></audio>
      </div>
      <div class="song-timer">
        <span class="current-time">0:00</span>
        <span class="max-duration">0:00</span>
      </div>
    </div>
    <div class="controls">
      <i id="repeat-plist" class="material-icons" title="Playlist looped">repeat</i>
      <i id="prev" class="material-icons">skip_previous</i>
      <div class="play-pause">
        <i class="material-icons play">play_arrow</i>
      </div>
      <i id="next" class="material-icons">skip_next</i>
      <i id="more-music" class="material-icons">queue_music</i>
    </div>
    <div class="music-list">
      <div class="header">
        <div class="row">
          <i class= "list material-icons">queue_music</i>
          <span>Music list</span>
        </div>
        <i id="close" class="material-icons">close</i>
      </div>
      <ul>
        <!-- here li list are coming from js -->
      </ul>
    </div>
  </div>
  <br>
  <br>
  </center>
  </div>

  <script src="music-list.php"></script>
  <script src="script.php"></script>

</body>
</html>