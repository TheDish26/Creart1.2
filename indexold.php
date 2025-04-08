<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
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
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="contact.html">Contact</a></li>
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
        <section id="testimonials">
            <h2>Testimonials</h2>
            <p>Read what our students have to say about their experience at Beauty Academy.</p>
            <div class="testimonial-container">
                <div class="testimonial">
                    <p>"Creart Academy has completely transformed my skills. The instructors are amazing!"</p>
                </div>
                <div class="testimonial">
                    <p>"I loved the hands-on training. I feel confident starting my own beauty business!"</p>
                </div>
                <div class="testimonial">
                    <p>"The courses are well-structured and easy to follow. Highly recommend!"</p>
                </div>
                <div class="testimonial">
                    <p>"The instructors are very supportive and knowledgeable."</p>
                </div>
                <div class="testimonial">
                    <p>"I gained so much confidence in my skills after attending Creart Academy."</p>
                </div>
                <div class="testimonial">
                    <p>"The hands-on training was exactly what I needed to start my career."</p>
                </div>
                <div class="testimonial">
                    <p>"The environment is so welcoming and inspiring!"</p>
                </div>
                <div class="testimonial">
                    <p>"I loved every moment of my time at Creart Academy."</p>
                </div>
                <div class="testimonial">
                    <p>"The best decision I ever made for my career!"</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section id="contact">
            <h2>Contact Us</h2>
            <p>Get in touch with us through our social media channels or contact form.</p>
            <p>Follow us on Instagram: <a href="https://www.instagram.com/creart.academiadebelleza/" target="_blank"><i class="fab fa-instagram"></i> @creart.academiadebelleza</a></p>
            <p>Follow us on TikTok: <a href="https://www.tiktok.com/@creart.academia.d?lang=en" target="_blank"><i class="fab fa-tiktok"></i> @creart.academia.d</a></p>
            <p><a href="contact.html">Contact Us</a></p> <!-- Footer Contact Us link -->
        </section>
        <p>&copy; 2025 Creart Beauty Academy. All rights reserved.</p>
    </footer>
</body>
</html>




<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Page - CREART ACADEMY</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php 
        require_once("layouts/header.php");
    ?>
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