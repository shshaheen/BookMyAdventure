<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
     <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>Home</title>
</head>
<body>
    
    <!-- header section starts here -->
    <main class="header-main">
        <h1 class="visually-hidden">Headers examples</h1>
      
        <div class="container">
          <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-4">Travel</span>
            </a>
      
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="home.php" class="nav-link active" aria-current="page">Home</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
              <li class="nav-item"><a href="package.php" class="nav-link">Package</a></li>
              <li class="nav-item"><a href="book.php" class="nav-link">Book</a></li>
            </ul>
          </header>
        </div>
      </main>
      <!-- header section ends here -->


<!-- home section starts here -->
<div class="container">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/unsplash5.jpg" class="d-block w-100" alt="dog">
            <div class="carousel-caption d-none d-md-block">
            <p>Explore,Discover,Travel</p>
            <h1>TRAVEL AROUND THE WORLD</h1>

              <a href="package.php" class="btn btn-primary">Discover More</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/unsplash1.jpg" class="d-block w-100" alt="couple">
            <div class="carousel-caption d-none d-md-block">
              <p>Explore,Discover,Travel</p>
              <h1>DISCOVER THE NEW PLACES</h1>
              <a href="package.php" class="btn btn-primary">Discover More</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/unsplash3.jpg" class="d-block w-100" alt="family">
            <div class="carousel-caption d-none d-md-block">
              <p>Explore,Discover,Travel</p>
              <h1>MAKE YOUR TOUR WORTHWHILE</h1>
              <a href="package.php" class="btn btn-primary">Discover More</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

<!-- home section ends here -->


    <!-- services section starts here -->
    <section class="services">
        <h1>OUR SERVICES</h1>
        <div class="services-container">
            <div class="service-box">
                <img src="images/trail-96.png" alt="Adventure">
                <h2>Adventure</h2>
            </div>
            <div class="service-box">
              <img src="images/map-96.png" alt="Tour Guide">
                <h2>Tour Guide</h2>
            </div>
            <div class="service-box">
              <img src="images/trekking-96.png" alt="Trekking">
                <h2>Trekking</h2>
            </div>
            <div class="service-box">
              <img src="images/fire-80.png" alt="Fire">
                <h2>Camp Fire</h2>
            </div>
            <div class="service-box">
              <img src="images/car-96.png" alt="Car">
                <h2>Off  Road</h2>
            </div>
            <div class="service-box">
              <img src="images/camp-96.png" alt="Camp">
                <h2>Camping</h2>
            </div>
        </div>
    </section>
    <!-- services section ends here -->

    <!-- home about section starts here -->
    <div class="container">
      <div class="row featurette align-items-center">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">About Us:</h2>
          <p class="text-body-secondary">we're passionate about helping you explore the world. Whether you're seeking adventure, relaxation, or cultural experiences, we're here to make your travel dreams come true.
          Our mission is to be the leading and most trustworthy travel management company that sets the standard for professionalism, reliability and transparency to its customers.
          </p>
          <a href="about.php" class='btn'>Read More</a>
        </div>
        <div class="col-md-5 order-md-1 d-flex justify-content-center">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
  <title>Placeholder</title>
  <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
  <image href="images/about1.png" width="400" height="400" alt="About"></image>
</svg>       
      </div>
      </div>
    </div>
    <!-- home about section ends here -->

    <!-- home packages section starts here -->
    <section class="packages">
        <h2>Our Packages</h2>
        <div class="package-cards">
            <div class="card">
                <img src="images/unsplash6.jpg" alt="Taj Mahal">
                <h3>Taj Mahal</h3>
                <p>Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Eos, Sint!</p>
                <button><a href="book.php">Book Now</a></button>
            </div>
            <div class="card">
                <img src="images/unsplash7.jpg" alt="Ooty">
                <h3>Ooty</h3>
                <p>Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Eos, Sint!</p>
                <button><a href="book.php">Book Now</a></button>
            </div>
            <div class="card">
                <img src="images/unsplash8.jpg" alt="Golden Temple">
                <h3> Golden Temple</h3>
                <p>Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Eos, Sint!</p>
                <button><a href="book.php">Book Now</a></button>
            </div>
        </div>
        <button class="load-more"><a href="package.php">Load More</a></button>
    </section>
    <!-- home packages section ends here -->


    <!-- home offer section starts here -->
    <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
    <svg class="bi mt-5 mb-3" width="48" height="48"><use xlink:href="#check2-circle"></use></svg>
    <h1 class="text-body-emphasis">UPTO 50% OFF</h1>
    <p class="col-lg-6 mx-auto mb-4">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio sapiente enim accusantium officiis quam possimus voluptas neque, consectetur maiores. Quod ad aliquid eaque mollitia tempora animi architecto similique hic inventore.
    </p>
    <button class="load-more"><a href="book.php">Book Now</a></button>

  </div>
    <!-- home offer section ends here -->


    <!-- footer section starts here -->
    <hr>
    <footer class="py-5">
      <div class="container">
        <div class="row justify-content-center"> <!-- Centering the row -->
          <div class="col-6 col-md-2 mb-3">
            <h5>Quick Links</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="home.php" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Home</a></li>
              <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> About</a></li>
              <li class="nav-item mb-2"><a href="package.php" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Package</a></li>
              <li class="nav-item mb-2"><a href="book.php" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Book</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-2 mb-3">
            <h5>Extra Links</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Ask Questions</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> About Us</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Privacy Policy</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-angle-right"></i> Terms Of Use</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-2 mb-3">
            <h5>Contact Info</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-phone"></i> +123-456-7890</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-phone"></i> +111-222-3333</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fas fa-envelope"></i> shaik1@gmail.com</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fa-solid fa-location-dot"></i> Kadapa,India- 516001</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-2 mb-3">
            <h5>Follow Us</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fab fa-facebook-f"></i>  Facebook</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fab fa-twitter"></i>  Twitter</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fab fa-instagram"></i>  Instagram</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i class="fab fa-linkedin"></i>  Linkedin</a></li>
            </ul>
          </div>
        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top align-items-center text-center">
          <p class="credit">© Created By <span>Miss.Web Designer</span>, All Rights Reserved!</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- footer section ends here -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
