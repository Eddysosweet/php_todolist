<?php
$id =$_GET['id'];

if(isset($_POST["content"])){
$content= $_POST["content"];
$timer = $_POST["time"];

$connect = mysqli_connect('localhost', 'root', '', 'todolist'); //mở kết nối đến mysql server;
if (!$connect) {
    die("connect failed") . mysqli_connect_error(); // kết nối thất bại;
}

$sql = "UPDATE todo SET content ='$content', timer = '$timer' where id = $id";
$query = mysqli_query($connect,$sql);
if($query){
    header("location:todolist.php");
}
}
else
{
    echo 'loi...';
}
?>