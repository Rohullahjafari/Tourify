<?php 
include "db-conection.php"; 
include "insert.php";
?>

<!DOCTYPE html>
<html lang="fa" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/style.css" type="text/css"/>
  <link rel="stylesheet" href="bootstrap/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css.map"  />
  <link rel="stylesheet" href="bootstrap/swiper.css" type="text/css" />
  <script type="text/javascript" src="js/jquery-3.6.0.js" ></script>
  <script type="text/javascript" src="js/bootstrap.js" ></script>
  <script type="text/javascript" src="js/bootstrap.bundle.js" ></script>
  <script type="text/javascript" src="js/popper.min.js" ></script>
  <script type="text/javascript" src="js/swiper.js" ></script>
  <script src="https://kit.fontawesome.com/0dcc816254.js" crossorigin="anonymous"></script>
  <title>Tourify</title>        

</head>

<body class="container fyekan bg-img">
  <!-- menu-->
  <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#"><img class="logos" src="img/logo.png" alt="logo"/></a>
  <button class="navbar-toggler btn-menu" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav nav-rtl">
      <a class="nav-link active" href="index.php">خانه <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="product.php">بلیط ها</a>
      <a class="nav-link" href="addproduct.php">افزودن بلیط </a>
      <a class="nav-link" href="contact.php">تماس با ما </a>
    </div>
  </div>
</nav>
</div>
 <!-- end menu -->

 
  <!-- content  -->
  <!-- banner  -->
  <div class="row">
<div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="img/1875334780Turkey,P20-,P20Banner.jpg.pagespeed.ce.Gibfo7l0yb.jpg" alt="banner 1"/></div>
        <div class="swiper-slide"><img src="img/1675039424Georgia,P20-,P201,P20,282,29.jpg.pagespeed.ce.Xb2G240bHj.jpg" alt="banner 2"/></div>
        <div class="swiper-slide"><img src="img/2138446221Dubai,P20-,P20Banner,P20-,P201.jpg.pagespeed.ce.BzDLb94GAn.jpg" alt="banner 3"/></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div></div>
    <!-- end banner  -->
      <div class="row p-5" style="background:#d9fffa">
        <div class="col col-12">
          <h3 class="text-center"> تور های برگزیده </h3>
          <hr style=" width:30px;  border-top: 3px solid black;">
          </div>

          <div class="col col-4 p-1">
            <div class="zoom rounded" id="zoom1">
              <h4>استانبول</h4>
            </div>
          </div>
          <div class="col col-4 p-1" >
            <div class="zoom rounded" id="zoom2">
              <h4>ایتالیا</h4>
            </div>
          </div>
          <div class="col col-4 p-1" >
            <div class="zoom rounded" id="zoom3">
              <h4>فرانسه</h4>
            </div>
          </div>
          <div class="col col-4 p-1" >
            <div class="zoom rounded" id="zoom4">
              <h4>دبی</h4>
            </div>
          </div>
          <div class="col col-4 p-1">
            <div class="zoom rounded" id="zoom5">
              <h4>ارمنستان</h4>
            </div>
          </div>
          <div class="col col-4 p-1">
            <div class="zoom rounded" id="zoom6">
              <h4>اسپانیا</h4>
            </div>
          </div> 
      </div> <!--sec 1-->
      <div class="row  ">
        <div class="col col-12">
          <img width= "1140px" style="margin-left: -15px;" src="img/fixed_image2_a5089d0ce952717fee02c3f5f0029046.jpg" alt="family">
        </div>
      </div>   


    <div class="row bg-light">
    <div class="col col-6 "style="padding-top: 43px;    padding-bottom: 43px;">
      <img src="img/تور-اسپانیا.png" alt="bread1"  height="500px" width="555px" style="border-radius: 30px;">
    </div>
    <div class="col col-6" style="padding-top: 65px;    padding-bottom: 43px;">
    <h2 class="text-rtl">رزرو بلیط </h2>
      <!--form-->
      <form method="POST" class="form-rtl">
  <div class="form-row" >
    <div class="form-group col-md-6">
      <label for="name">نام</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="نام">
    </div>
    <div class="form-group col-md-6">
      <label for="lastname">نام خانوادگی</label>
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="نام خانوادگی">
    </div>
  </div>
  <div class="form-group">
    <label for="mabda"> مبدا</label>
    <select id="mabda"  name="mabda" class="form-control">
        <option selected>انتخاب کنید ...</option>
        <option value="tehran ">تهران </option>
        <option value="esfehan">اصفهان</option>
        <option value="yazd">یزد</option>
        <option value="rasht">رشت</option>
        <option value="ahvaz">اهواز</option>
      </select>
  </div>
  <div class="form-group">
    <label for="maghsad"> مقصد</label>
    <select id="maghsad"  name="maghsad" class="form-control">
        <option selected>انتخاب کنید ...</option>
        <option value="mashhad ">مشهد </option>
        <option value="dubai">دبی</option>
        <option value="turkye">ترکیه</option>
        <option value="germany">المان</option>
        <option value="russian">روسیه</option>
      </select>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="tel">شماره تماس</label>
      <input type="text" maxlength="11" name="tel" class="form-control" id="tel">
    </div>
    <div class="form-group col-md-6">
      <label for="passport">پاسپورت</label>
      <select id="passport" name="passport" class="form-control">
        <option selected>انتخاب کنید ....</option>
        <option value="yes">دارم</option>
        <option value="no">ندارم</option>
      </select>
    </div>
   

  <button type="submit" id="rsubmit" name="rsubmit" class="btn btn-primary ">رزرو</button> 
  <?php if($dn){echo "<h4 class='text-success p-3 '>رزرو با موفقیت انجام شد. </h4>";} ?>
</form>
      <!--end form -->
    </div>
  </div>
  
  <div class="container">
  <div class="row p-5" style="background:#f1f5ff">
        <div class="col col-12">
          <h3 class="text-center"> هتل های محبوب </h3>
          <hr style=" width:30px;  border-top: 3px solid black;">
          </div>

          <div class="col col-4 p-3 bg-light rounded" >
            <div class="zoom " id="zoom9">
            </div>
            <h4 class="p-3 text-center">هتل استانبول</h4>
            <p class="p-3 text-center" style="opacity: .3;direction:rtl">20 خرداد 1403 - 25 خرداد 1403</p>
            <a  href="#" class="btn btn-info text-center " style="width: 100%;" >اطلاعات بیشتر</a>
          </div>
          <div class="col col-4 p-3 bg-light rounded" >
            <div class="zoom " id="zoom8">
            </div>
            <h4 class="p-3 text-center">هتل دبی</h4>
            <p class="p-3 text-center" style="opacity: .3;direction:rtl">16 خرداد 1403 - 20 خرداد 1403</p>
            <a  href="#" class="btn btn-info text-center " style="width: 100%;" >اطلاعات بیشتر</a>
          </div>
          <div class="col col-4 p-3 bg-light rounded" >
            <div class="zoom " id="zoom7">
            </div>
            <h4 class="p-3 text-center">هتل مشهد</h4>
            <p class="p-3 text-center" style="opacity: .3;direction:rtl">23 اردیبهشت 1403 - 29 اردیبهشت 1403</p>
            <a  href="#" class="btn btn-info text-center " style="width: 100%;" >اطلاعات بیشتر</a>
          </div>

      </div> <!--sec 1-->
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


<!--swiper script -->
 <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
	<!-- end swiper script -->
</body>

</html>