
let allMusic =[
  <?php
$myfile = fopen("MusicFile.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("MusicFile.txt"));
fclose($myfile);
?>];
 
   
    // {
    //   name: "Here is the music name",
    //   artist: "Here is the artist name",
    //   img: "image name here - remember img must be in .jpg formate and its inside the images folder of this project folder",
    //   src: "music name here - remember img must be in  formate and its inside the songs folder of this project folder"
    // }

