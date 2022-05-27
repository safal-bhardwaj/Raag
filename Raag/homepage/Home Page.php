<?php
session_start();
$_SESSION['alert']=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_home.css">
    <title>Raag | Home </title>
</head>
<script>
  document.getElementByID("subhead").addEventListner("load", function {
    const a = document.getElementByID("subhead");
    a.style.letterSpacing="5px";
    
  })

</script>
<body>
<header>
   <div>
   <table class="banner">
 <th style="padding-left: 7%;"> <img src="Logo_RAAG_1.png" alt="Logo" width="100px" height="70px"></th>
     <th style="padding-top: 2%; padding-left: 65% ; width: 100%;"> 
         <ul>
         <li><a href="contact.php">Contact</a></li>
         <li><a href="aboutus.php">About us</a></li>
       </ul>
      </th>
      
   </table>
</div>
</header>   


<div class="main">
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>

   <h1 style="font-family: 'Yellowtail', cursive; font-size:72px; color: #dadada; margin-left:14%;margin-top:-1%">Raag</h1>
   <h2 id="subhead"style=" font-family: Verdana, Arial, Helvetica, sans-serif; color:#dadada; font-size: 16px; margin-left:13%;margin-top:-3.5%;">Hymn &nbsp;&nbsp;of &nbsp;&nbsp;the &nbsp;&nbsp;Freedom</h2>
   <table style="margin-top : -1.5%; margin-left:7%; padding:10px;">
      <td>
  <th class="log" ><a  style="font-size: 24px; margin-top:0% ;  text-decoration:solid; " href="sign/sign_up_page.php">Join Tribe</a></th>
  <th style = "color:#dadada;font-size:32px;">|</th>
  <th class="log" ><a style="font-size: 24px; margin-top: 0% ; text-decoration:solid; " href="sign/sign_in_page.php">Log in</a></th>
</td>  
</table>
  <br>
  <br>
  <br>
  <br>
   <br>
 <br>
 <br>
 <br><br><br>

</div>

</body>
</html>
