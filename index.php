<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP To-Do App</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Simple PHP To-Do List</h2>

    <!-- Add Task Form -->
    <form action="add.php" method="POST" class="input-group mb-3">
        <input type="text" name="task" class="form-control" placeholder="Enter task..." required>
        <button class="btn btn-primary">Add Task</button>
    </form>

    <!-- Display Tasks -->
    <ul class="list-group">
        <?php
        $query = "SELECT * FROM tasks ORDER BY id DESC";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $done = $row['status'] ? "text-decoration-line-through text-muted" : "";
        ?>

        <li class="list-group-item d-flex justify-content-between">
            <span class="<?php echo $done; ?>"><?php echo $row['task']; ?></span>

            <div>
                <?php if (!$row['status']) { ?>
                    <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Done</a>
                <?php } ?>

                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
            </div>
        </li>

        <?php } ?>
    </ul>

</div>

</body>
</html>
