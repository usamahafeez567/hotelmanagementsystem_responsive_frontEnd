<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMS - Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <!-- PHP Connect with Links-->
  <?php require('internal/links.php'); ?>
  <style>
    .Availability-form{
      margin-top: -50px;
      z-index: 2;
      position: relative;
      
    }
     @media screen and (max-width: 575px) {
      .Availability-form{
      margin-top: 25px;
      padding: 0 35px;
      }}
  </style>
</head>

<body class="bg-light">
  
<!-- PHP Connect with Header-->
  <?php require('internal/header.php'); ?>


  <!-- Images -->
  <div class="container-fluid px-lg-4 mt-4">
   <div class="swiper swiper-container rounded">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.png" class="w-100 d-block">
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.png" class="w-100 d-block">
        </div>
      </div> 
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- Booking Availability -->
  <div class="container Availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">View Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-In</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-Out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Adult</label>
              <select class="form-select shadow-none">
                <!-- <option selected>Open this select menu</option> -->
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
                <option value="3">5</option>
              </select>
               
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Children</label>
              <select class="form-select shadow-none">
                <!-- <option selected>Open this select menu</option> -->
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="1">5</option>
              </select>
               
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">Rooms</h2>
  <div class="container">
    <div class="row">
      <!-- Simple Room -->
      <div class="col-lg-4 col-md-6">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/5.png" class="card-img-top">

          <div class="card-body">
            <h5>Single Room</h5>
            <h6 class="mb-4">PKR 1500</h6>
            <div class="feature mb-4">
              <h6 class="mb-1">
              <i class="bi bi-wifi"></i>
              <i class="bi bi-telephone"></i>
              <i class="bi bi-tv"></i>
              </h6>
            </div>
            <div class="d-flex">
            <a href="rooms.php" class="btn btn-sm text-white rounded-1 custom-bg shadow-none">Book Now</a>
            </div>
            
          </div>
          
        </div>

      </div>
      <!-- Double Room -->
      <div class="col-lg-4 col-md-6">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/6.png" class="card-img-top">

          <div class="card-body">
            <h5>Double Room</h5>
            <h6 class="mb-4">PKR 2500</h6>
            <div class="feature mb-4">
              <h6 class="mb-1">
              <i class="bi bi-wifi"></i>
              <i class="bi bi-telephone"></i>
              <i class="bi bi-tv"></i>
              <i class="bi bi-p-square"></i>
              </h6>
            </div>
            <div class="d-flex">
            <a href="rooms.php" class="btn btn-sm text-white rounded-1 custom-bg shadow-none">Book Now</a>
            </div>
            
          </div>
          
        </div>

      </div>
      <!-- Deluxe Room -->
      <div class="col-lg-4 col-md-6">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/8.png" class="card-img-top">

          <div class="card-body">
            <h5>Deluxe Room</h5>
            <h6 class="mb-4">PKR 3500</h6>
            <div class="feature mb-4">
              <h6 class="mb-1">
              <i class="bi bi-wifi"></i>
              <i class="bi bi-telephone"></i>
              <i class="bi bi-tv"></i>
              <i class="bi bi-p-square"></i>
              <i class="bi bi-snow"></i>
              <i class="bi bi-airplane"></i>
              </h6>
            </div>
            <div class="d-flex">
            <a href="rooms.php" class="btn btn-sm text-white rounded-1 custom-bg shadow-none">Book Now</a>
            </div>
            
          </div>
          
        </div>

      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-1 fw-bold shadow-none">Discover Now</a>

      </div>
    </div>
  </div>
  <!-- Our Services -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">Our Services</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/services/cam.png" width="80px">
          <h5 class="mt-3">24/7 Security</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/services/ac2.png" width="80px">
          <h5 class="mt-3">Air Conditioner</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/services/wifi.svg" width="80px">
          <h5 class="mt-3">Free Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/services/key.png" width="80px">
          <h5 class="mt-3">Keyless Room Entry</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/services/tv2.png" width="80px">
          <h5 class="mt-3">Television</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="services.php" class="btn btn-sm btn-outline-dark rounded-1 fw-bold shadow-none">View More</a>
        </div>
      </div>
    </div>

  <!-- Rating -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">Customer Review</h2>
  <div class="container">
    <!-- Swiper -->
    <div class="swiper swiper-review">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide rounded-3 bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <h6>Customer 1</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sunt ratione consequuntur libero deleniti autem voluptatem nulla quos quaerat tempore hic culpa ipsum veniam perspiciatis modi, vel rerum debitis tempora.</p>
          <div class="rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
          </div>
        </div>
        <div class="swiper-slide rounded-3 bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <h6>Customer 2</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sunt ratione consequuntur libero deleniti autem voluptatem nulla quos quaerat tempore hic culpa ipsum veniam perspiciatis modi, vel rerum debitis tempora.</p>
          <div class="rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
          </div>
        </div>
        <div class="swiper-slide rounded-3 bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <h6>Customer 3</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sunt ratione consequuntur libero deleniti autem voluptatem nulla quos quaerat tempore hic culpa ipsum veniam perspiciatis modi, vel rerum debitis tempora.</p>
          <div class="rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
          </div>
        </div>
        <div class="swiper-slide rounded-3 bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <h6>Customer 4</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sunt ratione consequuntur libero deleniti autem voluptatem nulla quos quaerat tempore hic culpa ipsum veniam perspiciatis modi, vel rerum debitis tempora.</p>
          <div class="rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
  <!-- About Us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">About Us</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded-3">
        <iframe class="w-100 rounded-2 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217759.99380853778!2d74.3343893!3d31.482940349999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1662489996033!5m2!1sen!2s" height="350px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>
            Contact Us
          </h5>
          <a href="tel: +923001234567" class="d-inline-block text-decoration-none mb-2 text-dark"><i class="bi bi-telephone-fill"></i>+923001234567</a>
          <br>
          <a href="tel: +923007777777" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+923007777777</a>
        </div>
        <div class="mt-4 bg-white p-4 rounded mb-4">
          <h5>
            Follow Us
          </h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter"></i> Twitter
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook"></i> Facebook
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram"></i> Instagram
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-linkedin"></i> LinkedIn
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- PHP Connect with Footer-->
  <?php require('internal/footer.php'); ?>


  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false
        }
      });
      var swiper = new Swiper(".swiper-review", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });

    </script>

</body>

</html>