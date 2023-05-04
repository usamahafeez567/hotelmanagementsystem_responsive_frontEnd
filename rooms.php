<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMS - Rooms</title>
  <!-- PHP Connect with Links-->
  <?php require('internal/links.php'); ?>
  <style>
   
  </style>
</head>

<body class="bg-light">
  
   <!-- PHP Connect with Header-->
  <?php require('internal/header.php'); ?>

  <div class="my-5 px-5">
    <h2 class="fw-bold text-center pop">
      Our Rooms
    </h2>
    <div class="h-line bg-dark"></div>
  </div>
     <!-- Filters -->
  <div class="container">
    <div class="row">

      <div class="col-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
              <h4 class="mt-2">Filter</h4>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">For Booking</h5>
                  <label class="form-label">Check-In</label>
                  <input type="date" class="form-control shadow-none mb-3">
                  <label class="form-label">Check-Out</label>
                  <input type="date" class="form-control shadow-none mb-3">
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                  <label class="form-label">Adults</label>
                  <select class="form-select shadow-none">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">4</option>
                    <option value="3">5</option>
                  </select>
                  <!-- <input type="number" class="form-control shadow-none mb-3"> -->
                  <label class="form-label mt-3">Children</label>
                  <select class="form-select shadow-none">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">4</option>
                    <option value="3">5</option>
                  </select>
                  <!-- <input type="number" class="form-control shadow-none mb-3"> -->
                </div>
                <button type="submit" class="btn text-white shadow-none custom-bg mt-2">Submit</button>
              </div>
            </div>
          </nav>
      </div>

      <!-- Card of Room -->

      <div class="col-lg-9 px-4">
        
        <!-- Simple Room -->

        <div class="card mb-4">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-8 border-0 shadow">
              <img src="images/rooms/5.png" class="img-fluid rounded">
            </div>
            
            <div class="col-md-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Simple Room</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni consectetur dolorem ullam, asperiores aliquam in.</p>
                <div class="feature mb-4">
                <h6 class="mb-3">
                <i class="bi bi-wifi"></i>
                <i class="bi bi-telephone"></i>
                <i class="bi bi-tv"></i>
                </h6>
                <h6 class="mt-3">PKR 1500</h6>
                <div class="d-flex">
                <a href="#" class="btn w-100 btn-sm text-white rounded-1 custom-bg shadow-none mt-3">Book Now</a>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Double Room -->

        <div class="card mb-4">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-8 border-0 shadow">
              <img src="images/rooms/6.png" class="img-fluid rounded">
            </div>
            
            <div class="col-md-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Double Room</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni consectetur dolorem ullam, asperiores aliquam in.</p>
                <div class="feature mb-4">
                <h6 class="mb-3">
                <i class="bi bi-wifi"></i>
                <i class="bi bi-telephone"></i>
                <i class="bi bi-tv"></i>
                <i class="bi bi-p-square"></i>
                </h6>
                <h6 class="mt-3">PKR 2500</h6>
                <div class="d-flex">
                <a href="#" class="btn w-100 btn-sm text-white rounded-1 custom-bg shadow-none mt-3">Book Now</a>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Deluxe Room -->

        <div class="card mb-4">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-8 border-0 shadow">
              <img src="images/rooms/8.png" class="img-fluid rounded">
            </div>
            
            <div class="col-md-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Deluxe Room</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni consectetur dolorem ullam, asperiores aliquam in.</p>
                <div class="feature mb-4">
                <h6 class="mb-3">
                <i class="bi bi-wifi"></i>
                <i class="bi bi-telephone"></i>
                <i class="bi bi-tv"></i>
                <i class="bi bi-p-square"></i>
                <i class="bi bi-snow"></i>
                <i class="bi bi-airplane"></i>
                </h6>
                <h6 class="mt-3">PKR 3500</h6>
                <div class="d-flex">
                <a href="#" class="btn w-100 btn-sm text-white rounded-1 custom-bg shadow-none mt-3">Book Now</a>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Deluxe Room 2-->

        <div class="card mb-4">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-8 border-0 shadow">
              <img src="images/rooms/2.png" class="img-fluid rounded">
            </div>
            
            <div class="col-md-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Deluxe Room 2</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni consectetur dolorem ullam, asperiores aliquam in.</p>
                <div class="feature mb-4">
                <h6 class="mb-3">
                <i class="bi bi-wifi"></i>
                <i class="bi bi-telephone"></i>
                <i class="bi bi-tv"></i>
                <i class="bi bi-p-square"></i>
                <i class="bi bi-snow"></i>
                <i class="bi bi-airplane"></i>
                </h6>
                <h6 class="mt-3">PKR 4500</h6>
                <div class="d-flex">
                <a href="#" class="btn w-100 btn-sm text-white rounded-1 custom-bg shadow-none mt-3">Book Now</a>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>

        </div>

    </div>
  </div>

  


  <!-- PHP Connect with Footer-->
  <?php require('internal/footer.php'); ?>


</body>

</html>