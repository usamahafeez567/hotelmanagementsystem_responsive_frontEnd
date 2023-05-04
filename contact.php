<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMS - Contact Us</title>
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
      Contact Us
    </h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi laborum hic numquam debitis quaerat explicabo <br> veritatis. Obcaecati, veniam? Laboriosam necessitatibus fugiat deleniti labore iure optio laudantium voluptates dolor odio suscipit.</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white shadow p-4 rounded">
          <iframe class="w-100 rounded mb-4 " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217759.99380853778!2d74.3343893!3d31.482940349999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1662489996033!5m2!1sen!2s" height="350px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h5>Address</h5>
          <a href="https://goo.gl/maps/8dfxngbG3NnLhDwdA" target="_blank" class="d-inline-block text-dark text-decoration-none"> <i class="bi bi-geo-alt-fill"></i> Lahore, Punjab, Pakistan</a>
          <h5 class="mt-3">Contact Us</h5>
          <a href="tel: +923001234567" class="d-inline-block text-decoration-none mb-2 text-dark"><i class="bi bi-telephone-fill"></i>+923001234567</a>
          <br>
          <a href="tel: +923007777777" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+923007777777</a>
          <h5 class="mt-3">Email</h5>
          <a href="mailto: bc180200378@vu.edu.pk" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i></i> bc180200378@vu.edu.pk</a>
          <h5 class="mt-3">
            Follow Us
          </h5>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5">
            <i class="bi bi-linkedin"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white shadow p-4 rounded">
          <form>
            <h5>
              Let's Get In Touch
            </h5>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mt-3">
              <label class="form-label" style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none" rows="7" style="resize: none;"></textarea>
            </div>
            <button type="submit" class="btn text-white mt-4 custom-bg">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>




  <!-- PHP Connect with Footer-->
  <?php require('internal/footer.php'); ?>


</body>

</html>