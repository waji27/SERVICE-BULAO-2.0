<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PROVIDERS BULAO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google FOnts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .wrapper{ width: 360px; padding: 20px; margin: auto; }
        nav{ height: 10vh;}

    </style>
</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                    <h1 class="m-0 text-primary">Service Bulao</h1>
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-0 p-lg-0">
                        <a href="./pages/index.php" class="nav-item nav-link active">Home</a>
                        <a href="#about-container" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="job-list.html" class="dropdown-item">Electrician</a>
                                <a href="job-detail.html" class="dropdown-item">Plumber</a>
                                <a href="job-detail.html" class="dropdown-item">Carpenter</a>
                                <a href="job-detail.html" class="dropdown-item">Welder</a>
                                <a href="job-detail.html" class="dropdown-item">Labourer</a>
                                <a href="job-detail.html" class="dropdown-item">Rickshaw</a>
                                <a href="job-detail.html" class="dropdown-item">Loader Rickshaw</a>
                            </div>
                        </div>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="category.html" class="dropdown-item">Job Category</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404</a>
                            </div>
                        </div> -->
                        <a href="#contact-container" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="login.php"><button type="button" class="btn btn-primary btn-sm">Login</button></a>
                    <a href="register.php"><button type="button" class="btn btn-secondary btn-sm mx-1">SignUp</button></a>
                </div>
    </nav>
    <!-- Navbar End -->


    <h1>Providers</h1>
    <div class="card"><p>Name: Ansa Khalid</p><p>Email: gcsebwp@gmail.com</p></div><div class="card"><p>Name: waji</p><p>Email: wasdd@gmail.com</p></div><div class="card"><p>Name: Wajdan Akmal</p><p>Email: waji@gmail.com</p></div>

    
    <?php
    // Include the cards from the database here
    // You can read and display them from the database table
    // or include them from a file where you append them in the 'process_form.php' script
    // For example, you can use PHP to include all the card HTML from a file:
    
    // $cards = file_get_contents('providers.php');
    // echo $cards;
    ?>
</body>
</html>
<div class="card"><p>Name: ali</p><p>Email: waji@gmail.com</p></div><div class="card"><p>Name: imran</p><p>Email: 2nd@gmail.com</p></div>