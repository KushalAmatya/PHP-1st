<?php
include('./db_config.php');
// include('./save.php');

$sql = "select * from todo";
$result = $conn->query($sql);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <form action="save.php" method="POST">
        <div class="container p-3">
            <h3 class="">Todo Application</h3>
            <input type="text" class="form-control" placeholder="Enter todo." name="todo">
            <button type="submit" class="btn btn-primary mt-2">Add todo</button>
        </div>
    </form>
    <table class="table table-secondary">
        <thead>
            <tr class="table table-secondary">
                <th scope="col">ID:</th>
                <th scope="col">Todo Item</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {

            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
            <?php
            }
            ?>


        </tbody>
    </table>
</body>

</html>