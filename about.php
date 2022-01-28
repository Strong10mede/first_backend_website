<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Website with Backend</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- custom css link -->
    <link rel="stylesheet" type="text/css" href="./style.css">

</head>
<body>
<?php include 'menu.php' ;?>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> About Us</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/pic4.jpg" alt="" class="img-fluid about_img">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4"> I am your dad</h2>
                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptatem ratione amet fugiat laborum corrupti dolore similique qui dolores! Laudantium rem et qui corrupti?</p>
                <a href="about.php" class="btn btn-success">Read more</a>
            </div>
        </div>
    </div>

</section>

<footer class="about_footer">
  <p class="text-center p-3 bg-dark text-white">© Strong10@mede | All rights reserved.</p>
</footer>

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>