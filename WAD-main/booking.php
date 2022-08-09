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
        $date = $_POST['date'];
        $destination = $_POST['destination'];
        $fname = $_POST['fname'];
        $tp = $_POST['tp'];
        $email = $_POST['email'];
        $days = $_POST['days'];
        $persons = $_POST['persons'];

        $sql= "INSERT INTO booking
        VALUES
        ('$date', '$destination', '$fname', '$tp', '$email', '$days', '$persons')";


        if($con->query($sql))
        {
            echo "<script>alert('Record inserted ')</script>"; 
            echo "<script>window.location.href = 'welcome.html'</script>"; 
        }
        else 
        {
            echo "<script>alert('Record insert failed ')</script>";
        }
        $con->close();
    }

?>

<!DOCTYPE html>
<html>
    <head>
       
        <title>Book Now</title>
        <link rel="stylesheet" href="booking.css">
    </head>
    <body>
        
        <section class = "banner">
            <div class = "card-container">
                <div class = "card-img">
                </div>

                <div class = "card-content">
                    <h3>Reservation</h3>
                    <form action="#" name="bookinform" method="POST">
                       
                    <div class = "form-row">
                    <input type="text" name="date" placeholder="MM/DD/YYYY"
                            onfocus="(this.type='date')">
			
                          
			
                            <select name = "destination" required>
                                <option value = "-Not Selected-">Destination</option>
                                <option value = "Kandy">Kandy</option>
                                <option value = "Trincomalee">Trincomalee</option>
                                <option value = "Ella">Ella</option>
                                <option value = "Mirissa">Mirissa</option>
                                <option value = "Arugam Bay">Arugam Bay</option>
                                <option value = "Galle">Galle</option>
                                <option value = "Hikkaduwa">Hikkaduwa</option>
                            </select>
                    </div>

			

                        <div class = "form-row">
                            <input type = "text" name='fname' placeholder="Full Name">
                            <input type = "text" name='tp' placeholder="Phone Number">
                        </div>
			            <div class = "form-row">
                            <input type = "text" name='email' placeholder="Email">
                            <input type = "text" name='days' placeholder="Duration">
                        </div>

                        <div class = "form-row">
                            <input type = "number" name='persons' placeholder="How Many Persons?" min = "1">
                            <input type = "submit" name="submit" value = "BOOK NOW">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
    </body>
</html>