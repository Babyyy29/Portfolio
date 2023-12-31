<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DevFolio - Developer Portfolio Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>





<body>

     <!-----Header----->
    <?php
        include_once("Navigation.php");
    ?>
     <!-----Page----->
        <?php
        include_once("Home.php");
        include_once("About.php");
        include_once("Activity.php");
        include_once("Education.php");
        include_once("Project.php");

        ?>

        <!-----Footer----->
        <?php
        include_once("footer.php");
        include_once("JavaScript.php");
        ?>

</body>