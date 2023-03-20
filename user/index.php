<?php
include '../db_conn.php';
$getalluser= mysqli_query($conn, "SELECT * FROM crud");
$getalluser= mysqli_fetch_all($getalluser,MYSQLI_ASSOC);



// $conn = OpenCon();
// echo "Connected Successfully";
// CloseCon($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Crud</title>

</head>
<body>
    
    <nav class="navbar nabvar-light justify-content-right fs-3 mb-5"
    style="background-color:#84c9ef;">
        CRUD Application
    <a href="../index.html" class="btn btn-dark mb-3 me-5">Log out</a>
    </nav>

        <div class="container">
            <a href="new.php" class="btn btn-dark mb-3" class="text-end mb-4">Add New</a>

            <table class="table table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Birthday</th>
                        <!-- <th scope="col">Gender</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($getalluser as $user): ?>
                    <tr>
                    <th scope="row"><?=$user['id']?></th>
                    <td><?=$user['first_name']?></td>
                    <td><?=$user['last_name']?></td>
                    <td><?=$user['email']?></td>
                    <td><?=$user['birthday']?></td>
                    <!-- <td>Male</td> -->
                    <td>
                        <a href="" class="link-dark"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </div>



       
</body>
</html>