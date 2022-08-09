


<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "traveller";


    $con= new mysqli($hostname,$username,$password,$db);

    // for Check connection
    if ($con->connect_error) 
        die("Database Connection failed: " . $con->connect_error);

    if(isset($_POST["submit"]))
    {
        $fname = $_POST["fname"];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pno = $_POST['phoneno'];
        $pwd = $_POST['password'];
        $gender = $_POST['gender'];
        $cpwd = $_POST['cpassword'];

        $sql= "INSERT INTO registration 
        VALUES
        ('$fname', '$username', '$email', '$pno', '$pwd', '$gender' )";


        if (strlen($fname)<5) {
            echo  "<script>alert('Enter Full Name ')</script>";
        }
        else if (!preg_match ("/^[0-9]*$/", $pno) ){  
            echo  "<script>alert(' Only numeric value is allowed ')</script>";
        }
        else if ($pwd!=$pwd){  
            echo  "<script>alert(' Password should be similar to confirm password! ')</script>";
        } 
        else if($con->query($sql))
        {
            echo "<script>alert('Record inserted ')</script>";  
        } 
        else 
        {
            echo "<script>alert('Record insert failed ')</script>";
            echo "";
        }
        $con->close();
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="register.css">
        <script src="register.js" defer></script>  
    </head>
    <body>
        <div class="container">
            <div class="title">Registeration</div>
                <form action="#" name="registerform" method="POST">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" name="fname" placeholder="Enter your name" required minlength="3" maxlength="50">
                        </div>
                        <div class="input-box">
                            <span class="details">Username</span>
                            <input type="text" name="username" placeholder="Enter your username" required minlength="3" maxlength="30">
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" name="phoneno" placeholder="Enter your number" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Confirm Password</span>
                            <input type="password" name="cpassword" placeholder="Confirm your password" required>
                        </div>
                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" id="dot-1" value="male">
                        <input type="radio" name="gender" id="dot-2" value="female">
                        <input type="radio" name="gender" id="dot-3" value="unknown">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
                            </label>
                        </div>
                    </div>
                    <div class="tbl">
                        <div class="button">
                            <input id="button1" type="submit" name="submit" value="submit" onclick="valid();">
                            <input id="button2" type="reset"  value="Cancel">
                        </div>
                    </div>
                </form>
                <a class="link" href="login.php">Login</a>
            </div>
        </div>
    </body>
</html>
