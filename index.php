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
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php include 'menu.php' ;?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pic3.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/pic1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/pic2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

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

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> Services</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
              <img class="card-img-top" src="images/pic5.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
          </div> 
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
              <img class="card-img-top" src="images/pic9.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
          </div> 
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" >
              <img class="card-img-top" src="images/pic11.jpg" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
          </div> 
        </div>
      </div>
    </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"> Our gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
         <img src="images/pic6.jpg" alt="" class="img-fluid pb-4 about_img">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <img src="images/pic7.jpg" alt="" class="img-fluid pb-4 about_img">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <img src="images/pic8.jpg" alt="" class="img-fluid pb-4 about_img">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <img src="images/pic9.jpg" alt="" class="img-fluid pb-4 about_img">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <img src="images/pic10.jpg" alt="" class="img-fluid pb-4 about_img">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <img src="images/pic11.jpg" alt="" class="img-fluid pb-4 about_img">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <img src="images/pic1.jpg" alt="" class="img-fluid pb-4 about_img">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <img src="images/pic2.jpg" alt="" class="img-fluid pb-4 about_img">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
         <img src="images/pic3.jpg" alt="" class="img-fluid pb-4 about_img">
      </div>
    </div>
  </div>

</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"> Our gallery</h2>
  </div>
  <div class="m-auto w-50" >
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label for="label_user">username</label>
        <input type="text" name="user" autocomplete="off" class="form-control" id="label_user">
      </div>
      <div class="form-group">
        <label for="label_mail">mail address</label>
        <input type="mail" name="mail" autocomplete="off" class="form-control" id="label_mail">
      </div>
      <div class="form-group">
        <label for="label_phone">phone number</label>
        <input type="phone" name="phone" autocomplete="off" class="form-control" id="label_phone">
      </div>
      <div class="form-group">
        <label for="label_comment">username</label>
        <textarea name="comment" id="label_comment" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>

<footer>
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