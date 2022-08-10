<?php
$connect = mysqli_connect('localhost', 'root', '', 'todolist'); //mở kết nối đến mysql server;
if (!$connect) {
    die("connect failed") . mysqli_connect_error(); // kết nối thất bại;
}

$sql = "SELECT * from todo";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $todo[] = $row;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>TODOLIST</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container">
        <h1>Danh sách việc cần làm</h1>
        <div>
            <table class="table caption-top">
                <caption>List of users</caption>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Content</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($todo as $value) { ?>
                        <tr>
                            <td><?php echo $value['id']; ?></td>
                            <td><?php echo $value['content']; ?></td>
                            <td><?php echo $value['timer']; ?></td>
                            <td><a id="edit" href="edit.php?id=<?php echo $value['id'] ?>">Edit</a><a id="delete" href="delete.php?id=<?php echo $value['id'] ?>">Delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <a class="add--work" href="add-work.php">add new work</a>
        <a class="reset" href="reset.php">Reset</a>
    </div>
    <style>
        a{
            padding: 10px;
        }
        .add-work {
            color: green;
        }

        tr>td>#edit {
            color: blue;
        }

        tr>td>#delete {
            color: red;
        }
    </style>
</body>

</html>