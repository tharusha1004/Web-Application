<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "traveller";

$con = new mysqli($hostname, $username, $password, $db);

if($con->connect_error)
    echo "Error! - Database is not Connceted <br>";

if(isset($_POST["submit"]))
{
    
    $username = $_POST["username"];
    $sql = "SELECT password FROM registration where username = '$username'";

    try{ 
        $result = $con->query($sql);

        $row = $result->fetch_assoc();

        if($row["password"]==$_POST["password"])
        {
            echo "<script>alert('Welcome!')</script>";
            echo "<script>window.location.href = 'welcome.html'</script>";
        }
        else
        {
            echo "Check Your Details Again!";
        }
    }
    catch(Exception $e){}

}

$con->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Login Form </title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="loginBox">
            <h2>Login Form</h2>
            <form name="loginform" action="#" method="POST">
                <!--<p>Email</p>-->
                <input type="text"  name="username" placeholder="Username">
                <!--<p>Password</p>-->
                <input type="password"  name="password" placeholder="Password">
                <input type="submit" name="submit" value="Sign In">
                <a href="#">Forget Password</a><br><br>
                <a href="registration.php">Register</a>
            </form>    
        </div>
    </body>
</html>
