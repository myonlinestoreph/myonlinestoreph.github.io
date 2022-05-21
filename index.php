<?php

$host="localhost";
$user="root";
$password="";
$db="mvonlinestore";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset([Username])){
    
    $uname=$_POST['Username];
    $password=$_POST['Password'];
    
    $sql="select * from login where username='"$.uname."'AND password='".$password."' limit 1";
    
    $result=mysql_query($sql)
    
    $if(mysql_num_rows($result))==1){
        echo "You are successfully log in";
        exit();
    }
    else{
        echo " You have enter incorrect password";
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Log In Form</title>
</head>
<body>
    <div class="container">
        <h2>LOGIN</h2>
        <form method="POST">
            <div class="row">
                <input type="text" required>
                <span></span>
                <label><li class='bx bx-user'></li>Username</label>
            </div>
            <div class="row">
                <span></span>
                <input type="password" required>
                <label><li class='bx bx-lock-alt'></li>Password</label>
            </div>
            <div class="password">Forgot password?</div>
            <input type="submit" value="login">
            <div class="signup">
                Not a member? <a href="signup.html">Sign up</a>
            </div>
            <div class="follow">
                <h3>- Follow Us -</h3>
                <a href="https://www.facebook.com" target="_blank"><img src="logo/fb.png" width="40px"></a>
                <a href="#" target="_blank"><img src="logo/ig.png" width="40px"></a>
                <a href="https://www.twitter.com" target="_blank"><img src="logo/t.png" width="40px"></a>
                <a href="https://www.tiktok.com" target="_blank"><img src="logo/tt.png" width="40px"></a>
            </div>
        </form>
    </div>
</body>
</html>