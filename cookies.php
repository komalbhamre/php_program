<?php

    setcookie("username","Komal",time()+(86400*30),"/");

    if(isset($_COOKIE["username"]))
    {
        echo "welcome " .$_COOKIE["username"]. "<br>";
    }
    else
    {
        echo"no cookie";
    }

    /*setcookie("username","",time()-3600,"/");*/

?>