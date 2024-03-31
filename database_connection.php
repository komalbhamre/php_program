<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Library Management System</h1>

    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "library";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the books table
    $sql_insert = "INSERT INTO books (book_title, author, publisher, category)
                   VALUES ('The Great Gatsby', 'F.', 'Charles Scribner\'s Sons', 'Classics'),('Komal', 'bhamare', 'Cccc', 'Classics')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "<p>New record inserted successfully.</p>";
    } else {
        echo "<p>Error: " . $sql_insert . "<br>" . $conn->error . "</p>";
    }

    // Update data in the users table
    $sql_update = "UPDATE users
                   SET phone_number = '123-456-7890'
                   WHERE user_id = 1";

    if ($conn->query($sql_update) === TRUE) {
        echo "<p>Record updated successfully.</p>";
    } else {
        echo "<p>Error: " . $sql_update . "<br>" . $conn->error . "</p>";
    }

    // Retrieve data from the books table
    $sql_retrieve = "SELECT * FROM books";
    $result = $conn->query($sql_retrieve);

    if ($result->num_rows > 0) {
        echo "<h2>Books:</h2>";
        echo "<table><tr><th>Book ID</th><th>Title</th><th>Author</th><th>Publisher</th><th>Category</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["book_id"]."</td><td>".$row["book_title"]."</td><td>".$row["author"]."</td><td>".$row["publisher"]."</td><td>".$row["category"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No books found.</p>";
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
