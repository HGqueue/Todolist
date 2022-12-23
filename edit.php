<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edite</title>
</head>
<?php
include"dbconn.php";
$id =$_POST['id'];
$sql = mysqli_query($conn,"SELECT*FROM tasks WHERE id=$id");
$data = mysqli_fetch_assoc($sql);

?>
<body>
<div class="w-50 m-auto">
        <form action="update.php" method="POST">
            <h1 class="text-center my-4 py-2">TODO LIST</h1>
            <label for="title">Update task</label>
            <input type="text" name="task" value="<?php echo $data['task'];?>" class="form-control" require placeholder="Add Your Task">
            <button type="submit"  name="btn-submit" class="btn btn-success my-2">UPDATE</button>
            <input type="hidden" name="id" id="id" value="<?php global $id; echo $id?>">
        </form>
    </div>
</body>
</html>