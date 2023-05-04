<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMS - About</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <!-- PHP Connect with Links-->
  <?php require('internal/links.php'); ?>
</head>

<body class="bg-light">
  
   <!-- PHP Connect with Header-->
  <?php require('internal/header.php'); ?>

  <div class="my-5 px-5">
    <h2 class="fw-bold text-center pop">
      About Us
    </h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi laborum hic numquam debitis quaerat explicabo <br> veritatis. Obcaecati, veniam? Laboriosam necessitatibus fugiat deleniti labore iure optio laudantium voluptates dolor odio suscipit.</p>
  </div>
  <!-- CEO About Details -->
  <div class="container">
    <div class="row justify-centent-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4">
        <h3 class="mb-3 ">Lorem, ipsum dolor.</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi impedit delectus alias saepe suscipit!</p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4">
        <img src="images/about/ceo3.png" class="w-100">
      </div>
    </div>
  </div>

  <!-- Management About Details -->
  <h3 class="my-5 fw-bold text-center">Our Team</h3>
  <div class="container px-4">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/COO.jpg" class="w-100">
            <h5 class="mt-2">Chief Operating Officer</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/marketing2.jpg" class="w-100">
            <h5 class="mt-2">Head of Marketing</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/Ops.jpg" class="w-100">
            <h5 class="mt-2">Head of Operations</h5>
          </div>
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="images/about/sf.jpg" class="w-100">
            <h5 class="mt-2">Head of Software Engineering</h5>
          </div>
         </div>
        <div class="swiper-pagination"></div>
    </div>

  </div>



  <!-- PHP Connect with Footer-->
  <?php require('internal/footer.php'); ?>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween:40,
      loop: true,
      pagination: {
      el: ".swiper-pagination",
      },
    });
  </script>


</body>

</html>