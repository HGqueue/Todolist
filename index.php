<?php include "dbconn.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fontawnsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Todolist</title>
</head>
<body>
    <div class="w-50 m-auto">
        <form action="dbquery.php" method="POST">
            <h1 class="text-center my-4 py-2">TODO LIST</h1>
            <label for="title">Task</label>
            <input type="text" name="task" class="form-control" require placeholder="Add Your Task">
            <button type="submit"  name="btn-submit" class="btn btn-success my-2">ADD TASK</button>
        </form>
    </div>
    <hr class="bg-dark w-50 m-auto">
    <div class="w-50 m-auto">
        <table class="table table-hover">
            <thead>
                <tr>
                    <!-- <th scope="col">ID</th> -->
                    <th scope="col">Task</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT*FROM `tasks`";
                    $result = $conn->query($sql);
                    if($result){
                    
                        while($row=mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                            <!-- <td scope="row" ><?php echo $row['id'];?></td> -->
                            <td scope="row" ><?php echo $row['task'];?></td>
                            <td>
                                <a href="<?php echo "edit.php?id=" . $row['id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?php echo "delete.php?id=" . $row['id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-trash-can"></i></a>                                
                            </td>
                            </tr>
                            <?php                                                       
                        }                       
                    }
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>