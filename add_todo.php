<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'todo_app');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['todoTitle']) && isset($_POST['todoDesc'])) {
    $title = $conn->real_escape_string($_POST['todoTitle']);
    $desc = $conn->real_escape_string($_POST['todoDesc']);

    // Insert new todo into the database
    $sql = "INSERT INTO todos (title, description) VALUES ('$title', '$desc')";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the main page
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
