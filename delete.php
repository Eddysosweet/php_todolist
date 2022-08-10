<?php 
 $id = $_GET['id'];
 $connect = mysqli_connect('localhost', 'root', '', 'todolist'); //mở kết nối đến mysql server;
if (!$connect) {
    die("connect failed") . mysqli_connect_error(); // kết nối thất bại;
}

$sql = "DELETE FROM todo WHERE id=$id";
$query = mysqli_query($connect,$sql);
if($query){
    header("location:todolist.php");
}
else
{
    echo 'loi...';
}
?>