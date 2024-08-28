<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'todo_app');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// delete selected todo

$id = $_GET['id'];

$sql = "DELETE FROM todos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: ". $conn->error;
}


?>