<?php
include"dbconn.php";

$id = $_GET['id'];
// $sql = "DELETE FROM tasks WHERE id = 18";
$sql= mysqli_query($conn,"DELETE FROM tasks WHERE id ='{$id}'");

    header("location:index.php");
?>