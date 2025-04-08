<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREART ACADEMY</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="hero">
        <img src="images/Creart-logo-1.png" alt="Creart Academy Logo" class="logo">
        <nav class="menu">

            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="index2.php">Testimonials</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="hero-content">
            <h1>Welcome to CREART ACADEMY</h1>
            <p>Your journey to beauty excellence starts here.</p>
        </div>
    </header>
    <main>
        <section id="about">
            <h2>About Us</h2>
            <p>Welcome to Beauty Academy, a beauty school located in the South of Bogota. We are dedicated to educating our students on nails and make up.</p>
        </section>
        <section id="courses">
            <h2>Our Courses</h2>
            <p>Explore our wide range of beauty courses designed to suit all levels of expertise.</p>
            <div class="image-grid">
                <img src="images/Creart-1-Edited.jpg" alt="Course 1">
                <img src="images/Creart-2-Edited.jpg" alt="Course 3">
                <img src="images/Creart-3-Edited.jpg" alt="Course 4">
            </div>
        </section>
      
    </main>
    <footer>
               <?php 
                    require_once("layouts/footer.php");
                ?>
            </footer>
  
</body>
</html>
