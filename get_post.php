<!DOCTYPE html>
<html>
    <head>
        <title>form Handling</title>
    </head>
<body>
        <form method="GET" action="handle.php">

            <label for="name">name</label>
            <input type="text" name="name" id="name">
            <br><br>

            <label for="email">email</label>
            <input type="email" name="email" id="email">
            <br><br>

            <input type="submit" value="Submit(GET)">

        </form> 
        <br><br>

        <form method="POST" action="handle.php">

            <label for="Username">Username</label>
            <input type="text" name="Username" id="Username">
            <br><br>

            <label for="Password">Password</label>
            <input type="Password" name="Password" id="Password">
            <br><br>

            <input type="submit" value="Submit(POST)">

        </form> 
</body>
</html>