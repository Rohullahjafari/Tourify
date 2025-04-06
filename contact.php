<?php include "db-conection.php"; include "insert.php";?>

<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/style.css" type="text/css" />
  <link rel="stylesheet" href="bootstrap/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css.map" />
  <link rel="stylesheet" href="bootstrap/swiper.css" type="text/css" />
  <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/swiper.js"></script>
  <script src="https://kit.fontawesome.com/0dcc816254.js" crossorigin="anonymous"></script>
  <title>Tourify</title>        

</head>

<body class="container fyekan bg-img">
  <!-- menu-->
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <a class="navbar-brand" href="#"><img class="logos" src="img/logo.png" alt="logo" /></a>
      <button class="navbar-toggler btn-menu" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav nav-rtl">
          <a class="nav-link " href="index.php">خانه <span class="sr-only">(current)</span></a>
          <a class="nav-link " href="product.php">بلیط ها</a>
          <a class="nav-link" href="addproduct.php">افزودن بلیط </a>
          <a class="nav-link active" href="contact.php">تماس با ما </a>
        </div>
      </div>
    </nav>
  </div>
  <!-- end menu -->


  <!-- content  -->

  <div class="row bg-white p-4">
    <div class="col col-12 ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1146.886054781405!2d51.02324359168583!3d35.605937106665564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfa!2sau!4v1743105018914!5m2!1sfa!2sau" width="1080" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  
  </div>

  <div class="row bg-light p-4 ">
    <div class="col col-6">
      <h3 class="text-rtl p-2 bg-info ticketh3"> ارتباط با ما </h3>
      <!--form-->
      <form method="POST" class="form-rtl">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ایمیل</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="ایمیل خود را وارد نمایید">
    </div>
  </div>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">نام و نام خانوادگی</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="نام و نام خانوادگی خود را وارد نمایید">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">دپارتمان</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="departman" id="gridRadios1" value="پشتیبان" checked>
          <label class="form-check-label clmargin" for="gridRadios1">
            پشتیبانی
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="departman" id="gridRadios2" value="مالی">
          <label class="form-check-label clmargin" for="gridRadios2">
            مالی
          </label>
        </div>
        <div class="form-check ">
          <input class="form-check-input" type="radio" name="departman" id="gridRadios3" value="انتقادات و پیشنهادات" >
          <label class="form-check-label clmargin" for="gridRadios3">
            انتقادات و پیشنهادات
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-12">
    <div class="form-group">
    <label for="exampleFormControlTextarea1">توضیحات</label>
    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-12">
      <button type="submit" name="csubmit" class="btn btn-info bfloat">ثبت تیکت</button>
      <?php if($cdn){echo "<h4 class='text-success p-3 '>تیکت با موفقیت ارسال شد. </h4>";} ?>
    </div>
  </div>
</form>
      <!--end form-->
    </div>
    <div class="col col-6  p-4 crtl">
      <h1 class="mb-4"> تماس با ما</h1>
      <p><i class="fas fa-home me-3" aria-hidden="true"></i>تهران - شهریار - وحیدیه</p>
      <p>
        <i class="fas fa-envelope me-3" aria-hidden="true"></i>
        info@example.com
      </p>
      <p><i class="fas fa-phone me-3" aria-hidden="true"></i> 0315484844</p>
      <p><i class="fas fa-print me-3" aria-hidden="true"></i> 0315664848</p>
    </div>





    <!-- end content -->


    <!-- Footer -->
<div class="container row-rtl ">
    
    <footer class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
      >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span class="text-info">در شبکه های اجتماعی به ما بپیوندید:</span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div class="text-info">
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="https://instagram.com/" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
    
      <!-- Section: Links  -->
      
      </section>
      <!-- Section: Links  -->
    
      <!-- Copyright -->
      <div class="text-center p-4" style=" direction: ltr; background-color: rgb(22 223 255);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="#">Rohullah Jafari</a>
      </div>
      <!-- Copyright -->
    </footer>
    </div>
    <!-- end Footer -->


   
</body>

</html>