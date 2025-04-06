<?php include "db-conection.php"; include "insert.php"; ?>

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
      <a class="nav-link " href="index.php">خانه <span class="sr-only">(current)</span></a>
      <a class="nav-link " href="product.php">بلیط ها</a>
      <a class="nav-link active" href="addproduct.php">افزودن بلیط  </a>
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


    
  <div class="row bg-light">
    <div class="col col-12 p-5">
      <!--form add product -->
      <form method="post" enctype="multipart/form-data" class="form-rtl ">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="title">عنوان بلیط</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="عنوان بلیط">
    </div>
    <div class="form-group col-md-4">
      <label for="price">قیمت بلیط</label>
      <input type="number"  class="form-control" id="price" name="price" placeholder="قیمت  ">
    </div>
    <div class="form-group col-md-4">
      <label for="pic">عکس </label>
      <input type="file" class="form-control" name="image[]" id="pic" >
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="date">تاریخ بلیط</label>
      <input type="date" class="form-control" name="date" id="date">
    </div>
    <div class="form-group col-md-4">
      <label for="status">وضعیت بلیط</label>
      <select id="status" name="status" class="form-control">
        <option disabled selected>انتخاب کنید...</option>
        <option value="active">فعال</option>
        <option value="deactive">غیر فعال</option>
      </select>
      
    </div>
    
    <div class="form-group col-md-2">
      <label for="productcode">کد بلیط</label>
      <input type="number" name="productcode" class="form-control" id="productcode">
    </div>
  </div>
  <div class="form-group">
    <label for="detaile">توضیحات بلیط </label>
    <textarea class="form-control" id="detaile" name="text" rows="4"></textarea>
    
  </div>
  <button type="submit" name="psubmit" class="btn btn-info">اضافه کردن بلیط</button>
  <?php if($pdn){echo "<h4 class='text-success p-3 '>بلیط با موفقیت ثبت شد. </h4>";} ?>
</form>
      
      <!-- end form add product -->
    </div>
   
  </div>
  

<!-- sho redult rezerv -->
<div class="row bg-light">
    <div class="col col-12">
    <h2 class="bg-warning ctitle gshadow" >لیست رزروی ها  </h2>
    <table class="rtable">
<tr>
<th class="rth">ایدی</th>
<th class="rth">نام  </th>
<th class="rth">نام خانوادگی</th>
<th class="rth">مبدا</th>
<th class="rth"> مقصد </th>
<th class="rth"> تلفن </th>
<th class="rth"> پاسپورت  </th>
</tr>
<?php

$sql="SELECT id,name,lastname,mabda,maghsad,tel,passport from rezerv";
$result=$conn->query($sql);
if($result-> num_rows > 0){
while($row = $result->fetch_assoc()){
	echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["lastname"]."</td><td>".wordwrap($row["mabda"], 140, "<br />\n")."</td><td>".$row["maghsad"]."</td><td>".$row["tel"]."</td><td>".$row["passport"]."</td></tr>";
	}
echo "</table>";
}
else{
echo "<h4 class='text-danger p-5' style='margin-right:auto;margin-left:auto;direction:rtl;text-align:center;'>هیچ رزروی  وجود ندارد</h4>";
}
$conn->close();

?>
    </div>
    
  <!-- sho redult rezerv -->  
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