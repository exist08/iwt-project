<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', 'brizzler08', 'todo_app');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['todoTitle']);
    $desc = $conn->real_escape_string($_POST['todoDesc']);

    if (isset($_POST['todo_id']) && !empty($_POST['todo_id'])) {
        // Update existing todo
        $todo_id = $conn->real_escape_string($_POST['todo_id']);
        $sql = "UPDATE todos SET title='$title', description='$desc' WHERE id='$todo_id'";
    } else {
        // Insert new todo
        $sql = "INSERT INTO todos (title, description) VALUES ('$title', '$desc')";
    }

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
