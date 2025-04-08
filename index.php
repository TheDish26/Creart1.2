<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver1.2Creart</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="hero">
        <?php 
            require_once("layouts/header.php");
        ?>
    </header>
    <main>
    <?php 
            require_once("layouts/main.php");
        ?>   
        <?php 
            require_once("layouts/Testimonials.php");
        ?>
    </main>
    <footer>
        <?php 
            require_once("layouts/footer.php");
        ?>
    </footer>
</body>
</html>