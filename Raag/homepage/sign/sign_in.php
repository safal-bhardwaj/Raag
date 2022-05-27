<?php
session_start();

$_SESSION['alert']=1;
        if(isset($_POST['submit']))
        {
            $conn=mysqli_connect('localhost','root','','Raag');
            
            $username= $_POST["username"];
            $password = $_POST["password"];
            

            $sql = "SELECT password FROM users where username='$username' ";
            $res= mysqli_query($conn,$sql,MYSQLI_USE_RESULT);
            $row = mysqli_fetch_row($res);

            if($row[0]==$password)
            {  
                $_SESSION['alert']=1;
                $_SESSION["id"]=$username;
            
               header("Location: user_dashboard/user_dashbord.php");
               exit();
            }
            else{
                $_SESSION['alert']=0;
               header("Location: sign_in_page.php");

                exit();
            }
        }
        $conn->close();

?>