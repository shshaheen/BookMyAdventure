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

    <title>Packages</title>
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

      <!-- image of about starts here-->
      <div class="heading" style="background:url(images/package.jpeg) no-repeat">
       <h1>packages</h1>
      </div>
      <!-- image of about ends here -->

    <!-- packages section starts here -->
      <section class="packages">
        <h2>Our Packages</h2>
        <br><br>
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
                <h3>Golden Temple</h3>
                <p>Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Eos, Sint!</p>
                <button><a href="book.php">Book Now</a></button>
            </div>
        </div>
        <br><br>
        <div class="package-cards">
            <div class="card">
                <img src="images/unsplash9.jpg" alt="Himachal Pradesh">
                <h3>Himalayas</h3>
                <p>Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Eos, Sint!</p>
                <button><a href="book.php">Book Now</a></button>
            </div>
            <div class="card">
                <img src="images/unsplash10.jpg" alt="Beach">
                <h3>Goa</h3>
                <p>Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Eos, Sint!</p>
                <button><a href="book.php">Book Now</a></button>
            </div>
            <div class="card">
                <img src="images/unsplash12.jpg" alt="Mountain" height="500">
            
                <h3>Ambert Fort</h3>
                <p>Lorem Ipsum Dolor Sit, Amet Consectetur Adipisicing Elit. Eos, Sint!</p>
                <button><a href="book.php">Book Now</a></button>
            </div>
        </div>
        <!-- <button class="load-more">Load More</button> -->
    </section>
    <!-- packages section ends here -->


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