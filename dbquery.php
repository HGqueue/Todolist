<?php
include "dbconn.php";
$task = $_POST['task'];
if(isset($_POST['btn-submit'])){
    if($_POST['task'] != ""){
        $conn->query("INSERT INTO tasks(`task`) VALUE('$task')");
        header('location:index.php');
    }else{
        echo "none data";
    }
}

?>