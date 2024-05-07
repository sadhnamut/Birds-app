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

    <!--card-->
    <div class="container">
        <div class="head">
        <h1 class="  text-center mb-5" >BirdsInformation</h1>
        </div>
        <div class="row">

            <?php

            include 'database.php';

            $sql = "SELECT * FROM topics4";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id=$row['topic_id'];
                    $topic_imges=$row['topic_imges'];
                    $topic_name=$row['topic_name'];
                    $topic_desc=$row['topic_desc'];
                    echo '<div class="col-md-4 col-sm-6 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img  class="card-img-top" src= '.$topic_imges.'  alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> '.$topic_name.'</h5>
                            <p class="card-text"> '.substr($topic_desc,0,50).'...........</p>
                            <a href="stories.php?story_id='.$id.'"class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>';
                }
            }
            ?>
             <!-- <div class="col-md-4 col-sm-6 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="./images/j1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">lovely parrots</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-md-4 col-sm-6 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="./images/t4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">lovely pigeon </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-md-4 col-sm-6 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="./images/l3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">love birds</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary"> Read More</a>
                    </div>
                </div>
            </div> -->


        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>