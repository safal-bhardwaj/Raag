<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Raag </title>
    <link rel="stylesheet" href="style_sign.css">
    <script>
    var a = <?php echo $_SESSION['alert']?>;
    if(a==0)
    {
        alert("Username or Password is wrong !!");
    }

    <?php $_SESSION['alert']=1?>
</script>

</head>


<body>
    <center><img src="Logo_RAAG_1.png" alt="Logo" width="180px" height="125px"></center>
    <form action="sign_in.php" method="POST" style="margin-top: 10%;">
        <h2 style="color: #dadada; font-family: Verdana, Arial, Helvetica, sans-serif;">Hey Welcome back !!</h2>
       <br> 
        <label for="username" > Username : </label>
        <input type="text" name="username" id="username" placeholder="john_wick69" required>

        <br>
        <br>
        <label for="password"> Password : </label>
        <input type="password" name="password" id="password" required>
        <br>
        <br>
        <input  type="submit" name="submit" value="Sign in !!!" class="but"></input>
        <br>
        <br>

    </form>
    
    
    
        
</body>
</html>

