<?php
        session_start();

        $_SESSION["username"] = "komal";
        $_SESSION["passwords"] = "komal";

        $username = $_SESSION["username"];
        $passwords = $_SESSION["passwords"];

        echo "Username:-" .$username. "<br>";
        echo "Passwords:- " .$passwords. "<br>";

        unset($_SESSION["username"]);
        unset($_SESSION["passwords"]);

?>