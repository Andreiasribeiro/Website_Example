<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>       
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/styles.css"/>
    <title>CV: John snel</title>
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
    </head>
    
    <body>
    <div class="row"> 
        <div class="column"><p class="white">
            30-34 Westmoreland St, Dublin, D02 HK35 &nbsp Tel: 0812345678 &nbsp
         </p>    
        </div>
        <div class="column" style="text-align:right" vertical-align: middle;>
           <a class="logout" href="logout.php">logout</a>
        </div>
    </div>  
    <div class="header">

    </div>    
        <div>
        <ul class="ourNavbar">
        <li><a href="./index.php">Home</a></li>
            <li><a href="./page2.php">Page 2</a></li>
            <li><a href="./page3.php">Page 3</a></li>
            <li><a href="./page4.php">Page 4</a></li>
            <li class="active"><a href="./page5.php">Page 5</a></li>
        </ul>
    </div>
        
        <h2 class="colourband">Page 2</h2>

        <div class="clearfix">


            <p class="padding">This page should only be accessible once logged in (using session variable)</p>

        <?php

        $sql = "SELECT username, email, password FROM user";
        $result = mysqli_query($connection, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Username: " . $row["username"]. " <br> Email: " . $row["email"]. " <br>Password: " . $row["password"]. "<br>";
            }
        } else {
            echo "0 results";
        }

        // close connection
        $connection->close();
        ?>
            

        </div>
        <br/>   
        <div style="text-align:center" class="footer">
            

        </div>
                
    </body>
</html> 