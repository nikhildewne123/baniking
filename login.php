<?php

    session_start();
    include("connection.php");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM `organizations` WHERE username='$username' and password='$password'";
     $result = mysqli_query($connect, $query);

     if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {

            if($username == $row['username'] and $password == $row['password'])
            {
            $_SESSION['bank_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['verify_login_credential'] = $row['random_var'];
            header("location:society/Bankpanel.php");
            }
            else{
                $_SESSION['message'] = "<a href='index.php'> <i class='far fa-times-circle'></i> </a>Details not found or Wrong Inputs";
                header("location:index.php");
            }
        }
    }
    else{
        $_SESSION['message'] = "<a href='index.php'> <i class='far fa-times-circle'></i> </a>Details not found or Wrong Inputs";
            header("location:index.php");
    }
        
        
   
   

        
    
      
?>