


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
       <div class="float-right">  <a href="home.html"  class="btn btn-dark mb-3 me-5">Home</a></div>
       
    </nav>
    
    
        <div class="container">
            <div class="text-center mb-4">
                <h3>Add New User</h3>
                <p class="text-muted">Complete the form below to add a new user</p>
            </div>
                <div class="container d-flex justify-content-center">
                     <form action="newdata.php" method="post" style="width:50vw; min-width:300px;">
                        <input type="button"  class="btn btn-dark mb-3" value="Go back" onclick="history.back() ">
                         <div class="row">
                            <div class="col">
                                <label class="form-label"> First Name:</label>
                                <input type="text" class="form-control" name="first_name"
                                placeholder="firstname">
                            </div>

                            <div class="col">
                                <label class="form-label"> Last Name:</label>
                                <input type="text" class="form-control" name="last_name"
                                placeholder="lastname">
                            </div>
                    </div>
                        
                    <div class="mb-1">
                            <label class="form-label"> Email:</label>
                            <input type="text" class="form-control" name="email"
                            placeholder="name@example.com">
                    </div>

                    <div class="mb-2">
                        <label class="form-label"> Birthday:</label>
                        <input type="text" class="form-control" name="birthday"
                        placeholder="January 1, 2023">
                    </div>

                    <!-- <div class="form-group mb-3">
                        <label>Gender:</label> &nbsp;
                        <input type="radio" class="form-check-input" name="gender"
                        id="male" value="male">
                        <label for="male" class="form-input-label">Male</label>
                        &nbsp;
                        <input type="radio" class="form-check-input" name="gender"
                        id="female" value="female">
                        <label for="female" class="form-input-label">Female</label>
                    </div> -->

                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>


        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
         crossorigin="anonymous"></script>
</body>
</html>