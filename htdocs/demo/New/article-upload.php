<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Article</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">

                <?php include('/includes/message.php'); ?>
                
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Add Article 
                            <a href="new/index1.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="new/function.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label>Title</label>
                                <input type="text" name="name" required class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Discription</label>
                                <input type="text" name="course" required class="form-control">
                            </div>

                           

                            <div class="mb-3">
                                <hr>
                                <button type="submit" name="saveStudent" class="btn btn-primary float-end">Save </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

