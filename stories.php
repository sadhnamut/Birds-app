<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch website</title>
    <!-- botstrap css cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Smooch&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- font-awesome link -->
</head>

<body>
    <?php include 'database.php'; ?>
    <?php 
    // include 'header.php'; ?> 

    <!--php-->
    <?php
    // $id=$_GET['story_id'];
    // $sql="select * from 'topics' where topic_id=$id";
    // $result=mysqli_query($con,$sql);
    // while ($row=mysqli_fetch_assoc($result)){
    //     $topic_name=$row['topic_name'];
    //     $topic_desc=$row['topic_desc'];
    //     $topic_imges=$row['topic_imges'];

    // }

    if (isset($_GET['story_id'])) {
        $id = $_GET['story_id'];

        // Prepare and execute SQL query
        $sql = "SELECT * FROM topics4 WHERE topic_id=$id";
        $result = mysqli_query($con, $sql);

        // Check if query executed successfully
        if ($result) {
            // Fetch data from the result
            while ($row = mysqli_fetch_assoc($result)) {
                $topic_name = $row['topic_name'];
                $topic_desc = $row['topic_desc'];
                $topic_imges = $row['topic_imges'];
            }
        } else {
            // Handle SQL error
            echo "Error: " . mysqli_error($con);
        }
    } else {
        // Handle case when 'story_id' parameter is not set

    }

    ?>

    <!--jumbotron-->
    <!-- <div class="container-fluid">
        <div class="jumbotron bg-warning rounded ">
            <div class="container">
                <h1 class="display-4"><?php echo $topic_name; ?>
                </h1>
                <p class="lead"><?php echo  $topic_desc; ?></p>
                <button class="btn btn-dark text-light">
                    <a class="text-white" href="#reading" role="button">Read more</a>
                </button>
            </div>
        </div>
    </div> -->


    <div class="container-fluid  main ">
    <?php include 'header.php'; ?>


        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/b2.jpg" class="d-block w-100 " height="580px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/owl.jpg" class="d-block w-100" height="580px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./images/b3.jpg" class="d-block w-100" height="580px" alt="...">
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>

    <!--Reading-->
    <div class="container " id='reading'>
        <div class="jumbotron jumbotron-fluid bg-warning rounded p-0">
            <div class="container">
              
                <h1 class="display-4 text-center ">Read And Enjoy</h1>
                <div class="text-center mt-4">
                <img src="<?php echo $topic_imges ;  ?> ">
                </div>
                <h1 class=" dis display-4 text-center text-dark pt-3  "><?php echo $topic_name; ?></h1>
                <p class="lead p-5 text-justify"><?php echo  $topic_desc; ?>
                </p>

            </div>
            <div class="text-center pb-5 pt-3">
            <button class="btn btn-dark text-light pe-5 ps-5 ">
                    <a class="text-white" href="index.php" role="button">Back</a>
                </button>
            </div>
        </div>
    </div>
    <!--thanks read-->
    <div class="container-fluid mb-4  mt-3 mb-3">
        <h2 class="text-center display-4">😂 Thank Read ti birds Information 🤓</h2>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>