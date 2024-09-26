<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Article</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
    <div class="container">

                <?php include('../new/includes/message.php'); ?>
                
                <?php
                require_once '../new/includes/dbconfig1.php';

                if(isset($_GET['id']))
                {
                    $student_id = $_GET['id'];
                    $query = "SELECT * FROM student WHERE id='$student_id' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $studentData = mysqli_fetch_array($query_run);
                        ?>
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>
                                            Edit Article - Edit & Delete Artical
                                            <a href="../new/index1.php" class="btn btn-danger float-end">BACK</a>
                                        </h4>
                                    </div>
                                    <div class="card-body">

                                        <form action="../new-function.php" method="POST" enctype="multipart/form-data">

                                            <input type="hidden" name="student_id" value="<?=$studentData['id']?>" />

                                            <div class="mb-3">
                                                <label>Title</label>
                                                <input type="text" name="name" value="<?=$studentData['name']?>" required class="form-control" />
                                            </div>

                                            <div class="mb-3">
                                                <label>Discription</label>
                                                <input type="text" name="course" value="<?=$studentData['course']?>" required class="form-control" />
                                            </div>

                                            

                                            <div class="mb-3">
                                                <hr>
                                                <button type="submit" name="updateStudent" class="btn btn-primary float-end">Updatet</button>
                                                <a href="../new/index1.php"class="btn btn-danger float-end me-3">BACK</a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <?php
                    }
                    else
                    {
                        ?>
                            <div class="card card-body">
                                <h3>No Record Found</h3>
                            </div>
                        <?php
                    }
                }
                ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

