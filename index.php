<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts.css">
    <script defer src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <h1>T O D O</h1>
        <div id="openModalBtn" class="add-todo-btns">
            <button>Add Todo</button>
            <button><ion-icon name="add-circle-outline"></ion-icon></button>
        </div>
        <!-- <div class="todos-list">
            <div class="todo-card">
                <p class="todo-title">IWT presentation helllo ther ah jisa iaasdfas asdfa sdfasfas</h4>
                <p class="todo-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque qui accusantium consequuntur sed, facilis iure debitis deleniti autem esse culpa assumenda repellat totam vero a magni quis cumque soluta harum?</p>
            </div>
            <div class="todo-card">
                <p class="todo-title">IWT presentation helllo ther ah jisa iaasdfas asdfa sdfasfas</h4>
                <p class="todo-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque qui accusantium consequuntur sed, facilis iure debitis deleniti autem esse culpa assumenda repellat totam vero a magni quis cumque soluta harum?</p>
            </div>
        </div> -->
        <div class="todos-list">
            <?php
            // Connect to the database
            $conn = new mysqli('localhost', 'root', '', 'todo_app');
    
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
    
            // Fetch todos from the database
            $sql = "SELECT * FROM todos ORDER BY created_at DESC";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="todo-card">';
                    echo '<p class="todo-title">' . htmlspecialchars($row['title']) . '</p>';
                    echo '<p class="todo-desc">' . htmlspecialchars($row['description']) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>No todos found.</p>';
            }
    
            $conn->close();
            ?>
        </div>
        <div class="dustbin">
            <img src="./assets/images/—Pngtree—silver trash bin clipart_5947991.png" alt="">
        </div>
        <div class="pages">
            <img style="--i:1" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:2" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:3" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:4" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:5" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:6" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:7" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:8" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:9" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:10" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:11" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:12" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:13" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <img style="--i:14" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
        </div>
        <div class="page-animator" id="page-animator">
            <img id="pick-up-page" class="" src="./assets/images/—Pngtree—blank page shadow png_7718379.png" alt="">
            <form class="todo-form" action="add_todo.php" method="POST">
                <input class="kalam-bold" type="text" id="todoTitle" name="todoTitle" placeholder="Title here..." required>
                <textarea class="kalam-regular" id="todoDesc" name="todoDesc" placeholder="Description here..." required></textarea>
            <button type="submit">Add Todo</button>
        </form>
        </div>
    </main>
</body>

</html>