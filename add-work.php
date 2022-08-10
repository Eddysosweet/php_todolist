
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Add-todolist</title>
</head>
<body>
    <form action="handle.php" method="POST">
        <label for="content">Content</label>
        <input type="text" name="content" id="content"/>
        <label for="time">Time</label>
        <input type="text" name="time" id="time"/>
        <button>add</button>
    </form>
</body>
</html>