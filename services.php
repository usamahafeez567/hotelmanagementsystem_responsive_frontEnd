<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMS - Our Facilities</title>
  <!-- PHP Connect with Links-->
  <?php require('internal/links.php'); ?>
  <style>
    .pop{
      border-radius: 25px;
    }
    .pop:hover{
      border-top-color:var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.5s; 
    }
    .pos{
      margin: 10px 100px;
      
    }
  </style>
</head>

<body class="bg-light">
  
   <!-- PHP Connect with Header-->
  <?php require('internal/header.php'); ?>

  <div class="my-5 px-5">
    <h2 class="fw-bold text-center pop">
      Our Services
    </h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi laborum hic numquam debitis quaerat explicabo <br> veritatis. Obcaecati, veniam? Laboriosam necessitatibus fugiat deleniti labore iure optio laudantium voluptates dolor odio suscipit.</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
          <img src="images/services/wifi.svg" width="40px">
          <h4 class="m-0 ms-3">Free Wifi</h4>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eum tempore quisquam nobis ducimus alias</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
          <img src="images/services/cam.png" width="40px">
          <h4 class="m-0 ms-3">24/7 Security</h4>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eum tempore quisquam nobis ducimus alias</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
          <img src="images/services/ac2.png" width="40px">
          <h4 class="m-0 ms-3">Air Conditioner</h4>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eum tempore quisquam nobis ducimus alias</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4 pos">
        <div class="bg-white shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
          <img src="images/services/key.png" width="40px">
          <h4 class="m-0 ms-3">Keyless Room Entry</h4>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eum tempore quisquam nobis ducimus alias</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4 pos">
        <div class="bg-white shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
          <img src="images/services/tv2.png" width="40px">
          <h4 class="m-0 ms-3">Television</h4>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eum tempore quisquam nobis ducimus alias</p>
        </div>
      </div>
    </div>
  </div>


  <!-- PHP Connect with Footer-->
  <?php require('internal/footer.php'); ?>


</body>

</html>