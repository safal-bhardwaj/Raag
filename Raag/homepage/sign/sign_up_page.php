<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_sign.css" type="text/css">
    <title>Raag | Sign up Page</title>
    
</head>
<body>
    <center><img src="Logo_RAAG_1.png" alt="Logo" width="180px" height="125px"></center>

    <form action="Users.php" method="POST">
       <br> 
       <br>
        <label for="username" > Username : </label>
        <input type="text" id="username" name= "username"placeholder="john_wick69" required>

        <br>
        <br>
        
        <label for="password"> Password : </label>
        <input type="password" name="password" id="password" required>
        <br>
        <br>
        <br>
        <br>

        <label for="Name"> Name : </label>
        <input type="text" name="Name" id="Name" placeholder="Eg. John Wick" required>
        <br>
        <br>
        <label for="Email"> Email : </label>
        <input type="email" name="Email" id="Email" placeholder="Eg. john_wick@pencil.com" required>
        <br>
        <br>
        <label for="age"> Age : </label>
        <input type="number" name="age" id="age" placeholder="Eg.18" required>
        <br>
        <br>
        <label for="music"> Music you like : </label>
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
        <br>
        <input class="but" type="submit" value="Submit" name="Submit">
        <br>
        <br>
    </form>
    <center>
        <form action="sign_in_page.php">
           <h2 style="color: #dadada; font-family: Verdana, Arial, Helvetica, sans-serif;">OR You can !!</h2>
        <button class="but" type="submit" value="Sign In ">Sign In</button>
        <br>
        <br>
    </form>
</center>
  
    
</body>
</html>