<?php
$id = $_GET['id'];
$connect = mysqli_connect('localhost', 'root', '', 'todolist'); //mở kết nối đến mysql server;
if (!$connect) {
    die("connect failed") . mysqli_connect_error(); // kết nối thất bại;
}

$sql = "SELECT * from todo where id= $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="handle-edit.php?id=<?php echo $id; ?>" method="POST">
        <label for="content">Content</label>
        <input type="text" name="content" id="content" value="<?php echo $row['content'] ?>" />
        <label for="time">Time</label>
        <input type="text" name="time" id="time" value="<?php echo $row['timer'] ?>"/>
        <button>add</button>
    </form>
</body>

</html>