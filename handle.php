<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>

    <h2>Form submitted</h2>

    <?php

        if(isset($_GET['name']))
        {
            echo "Name :-".$_GET['name']."<br>";
        }
        if(isset($_GET['email']))
        {
            echo "email :-".$_GET['email']."<br>";
        }
    
    ?>
    <br><br>

        <h2>post method</h2>

    <?php

        if(isset($_POST['Username']))
        {
            echo "Username:-".$_GET['Username']."<br>";
        }
        if(isset($_POST['Password']))
        {
            echo "Password:-".$_GET['Password']."<br>";
        }
    
    ?>


    </body>
</html>