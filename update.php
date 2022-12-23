<?php
include"dbconn.php";
$id =$_POST['id'];
$task=$_POST['task'];
$sql= mysqli_query($conn,"UPDATE tasks SET task ='$task' WHERE id ='{$id}'");

header("inlocationdex.php");


?>