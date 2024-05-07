<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Cards with HD Videos</title>
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for styling */
        .container {
            width: 100% !important;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        video {
            width: 100%;
            height: auto;
            border-radius: 15px;
        }

        .main {

            margin-bottom: 70px;
            /* height: 90vh; */
            background-image: linear-gradient(to right, rgb(0, 251, 255), white, rgb(0, 251, 255));
        }

        a {
            font-family: "Dancing Script", cursive;
            color: black !important;
            font-optical-sizing: auto;
            font-weight: bold;
            font-size: larger;
            font-style: normal;
        }
    </style>
</head>

<body>
    <div class="container-fluid  main ">
        <?php include 'header.php'; ?>
    </div>

    <div class="container mt-p">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video height="400" controls>
                            <source src="https://cdn.pixabay.com/vimeo/145131537/swans-1287.mp4?width=640&hash=cf5d288c4d0c6acc54b31984a3559ab9945b2586 ">

                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video controls>
                            <source src="https://cdn.pixabay.com/vimeo/486227472/sheep-57647.mp4?width=1280&hash=c6155399e13272a859c02c1b37ebf8d999b83068" type="video/mp4">

                        </video>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video height="400" controls>
                            <source src="https://cdn.pixabay.com/vimeo/447087782/bird-46026.mp4?width=640&hash=6ed5b45902617fc3dc35f6981317894cd65631eb ">

                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video controls>
                            <source src="https://cdn.pixabay.com/vimeo/363524230/wolf-27400.mp4?width=1280&hash=77befd62a5e9fee26b978c5e2b5a96e66e07b87e" type="video/mp4">

                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video height="400" controls>
                            <source src="https://cdn.pixabay.com/vimeo/226624850/rooster-10685.mp4?width=640&hash=a0854e4db217150fe36f21fa5819db3bace3464e ">

                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video controls>
                            <source src="https://cdn.pixabay.com/vimeo/267503898/flamingo-15922.mp4?width=640&hash=1744601dc2ffe5a2b0ceaa57e44dc2cfa127a97c" type="video/mp4">

                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video height="400" controls>
                            <source src="https://cdn.pixabay.com/vimeo/700585495/lion-animal-114145.mp4?width=640&hash=cecf9f9a6a0d999d738a125430c7ddca15110ef9 ">

                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video controls>
                            <source src="https://cdn.pixabay.com/vimeo/219173276/bird-9334.mp4?width=1280&hash=4a5bef06efe3f651f325fd2effa7d55d0170b7a3" type="video/mp4">

                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video height="400" controls>
                            <source src="https://cdn.pixabay.com/vimeo/194441181/aquarium-6636.mp4?width=640&hash=99d7c85ba4697e447287c978426726b298f48e59 ">

                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video controls>
                            <source src="https://cdn.pixabay.com/vimeo/394863011/elephant-31773.mp4?width=640&hash=19c743ce61bfec5b9cfcf73d37ce3ba2f45f38a7" type="video/mp4">

                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video height="400" controls>
                            <source src="https://cdn.pixabay.com/vimeo/586995619/bird-84863.mp4?width=1280&hash=8ae077fed193c729fbc3b51c989180a5f02fd9ca">

                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video controls>
                            <source src="https://cdn.pixabay.com/vimeo/851138184/birds-174255.mp4?width=640&hash=8c8fcb8a707c1daae2bf026ed16c51636e0d8d30" type="video/mp4">

                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video height="400" controls>
                            <source src="https://cdn.pixabay.com/vimeo/438612236/zebra-44236.mp4?width=1280&hash=e35a8741c57bd58a405ef08cffc83ef87c261cef">

                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video controls>
                            <source src="https://cdn.pixabay.com/vimeo/473869656/cheetah-53486.mp4?width=640&hash=af2d1bdf69cd0e10e97c2442b8e4b1d30679d528" type="video/mp4">

                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video height="400" controls>
                            <source src="https://cdn.pixabay.com/vimeo/141966788/black-bear-930.mp4?width=480&hash=6bcc5282b15f9a7c9312f0fcae351a2d349885fd">

                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">


                        <video controls>
                            <source src="https://cdn.pixabay.com/vimeo/157140556/barbary-macaque-2262.mp4?width=640&hash=aefcdeb4b35f2fc65bdc5812558a69000dc3abae" type="video/mp4">

                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php include 'footer.php'; ?>
</body>

</html>