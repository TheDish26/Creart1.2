<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>1.3BeautyAcademy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      scroll-behavior: smooth;
    }
    section {
      padding: 80px 0;
    }
    nav a {
      text-transform: uppercase;
      font-weight: 500;
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Creart Beauty Academy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="#location">Location</a></li>
          <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sections -->
  <section id="about" class="bg-light">
    <div class="container text-center">
    <?php 
            require_once("layouts/header.php");
        ?></div>
  </section>

  <section id="testimonials">
     
        <?php 
            require_once("layouts/Testimonials.php");
        ?>
  </section>

  <section id="contact" class="bg-light">
    <div class="container text-center">
      <h2>Contact</h2>
      <p>Email: info@beautyacademy.com | Phone: (123) 456-7890</p>
    </div>
  </section>

  <section id="location">
    <div class="container text-center">
      <h2>Location</h2>
      <p>123 Glamour Street, Los Angeles, CA</p>
    </div>
  </section>

  <section id="gallery" class="bg-light">
    <div class="container text-center">
      <h2>Gallery</h2>
      <p>Photos from our classes and events will be here!</p>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<section id="contact">
    <h2>Check out our social media!</h2>
    <p>Come chat with us through our social media channels or contact form.</p>
    <p>Follow us on Instagram: <a href="https://www.instagram.com/creart.academiadebelleza/" target="_blank"><i class="fab fa-instagram"></i> @creart.academiadebelleza</a></p>
    <p>Follow us on TikTok: <a href="https://www.tiktok.com/@creart.academia.d?lang=en" target="_blank"><i class="fab fa-tiktok"></i> @creart.academia.d</a></p>
    <p><a href="contact.php">Contact Us</a></p> <!-- Footer Contact Us link -->  
</section>