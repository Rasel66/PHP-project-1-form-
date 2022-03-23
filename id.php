<?php 
    if(isset($_POST['btn']))
    {
        $name = $_POST['name'];
        $courseName = $_POST['courseName'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $batch = $_POST['batch'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,900&display=swap" rel="styleshee">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="id.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="h-top">
                        <h2>About Yourself</h2>
                    </div>
                    <div class="h-bottom">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="img">
                                    <img src="./img/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="details">
                                <h5>Name: <?php if(isset($name)){ echo $name;}?></h5>
                                <h5>Course Name: <?php if(isset($courseName)){ echo $courseName;}?></h5>
                                <p><i class="fa fa-star" aria-hidden="true"></i>Phone: <?php if(isset($phone)){ echo $phone;}?></p>
                                <p><i class="fa fa-star" aria-hidden="true"></i>Email: <?php if(isset($email)){ echo $email;}?></p>
                                <p><i class="fa fa-star" aria-hidden="true"></i>Batch No: <?php if(isset($batch)){ echo $batch;}?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>