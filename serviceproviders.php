<?php
// Database configuration
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'demo';

// Create a database connection
$db = new mysqli($hostname, $username, $password, $database_name);

// Check for database connection errors
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
    // Retrieve form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $gender = $_POST['gender'];
    $street_address = $_POST['street_address'];
    $occupation = $_POST['occupation'];
    $experience = $_POST['experience'];
    $available_from = $_POST['available_from'];
    $available_to = $_POST['available_to'];

    // Perform validation and sanitization if needed

    // Insert data into the database
    $sql = "INSERT INTO service_providers (full_name, email, phone_number, gender, street_address, occupation, experience, available_from, available_to) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    }
    
    
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sssssssss", $full_name, $email, $phone_number, $gender, $street_address, $occupation, $experience, $available_from, $available_to);

    if ($stmt->execute()) {
        // Data inserted successfully, now construct the card HTML
        $cardHtml = '<div class="card">';
        $cardHtml .= '<p>Name: ' . $full_name . '</p>';
        $cardHtml .= '<p>Email: ' . $email . '</p>';
        // Add other data to the card as needed
        $cardHtml .= '</div>';

        // Append the card HTML to a file named providers.php
        $providersFile = 'providers.php';
        file_put_contents($providersFile, $cardHtml, FILE_APPEND);

        // Redirect back to addproviders.php or display a success message
        header("Location: providers.php");
        exit();
    } else {
        // Handle database insertion error
        echo "Error: " . $stmt->error;
    }
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>POST A SERVICE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google FOnts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
    <link href="css/service-providers.css" rel="stylesheet">

    <style>
    .wrapper {
        width: 360px;
        padding: 20px;
        margin: auto;
    }

    nav {
        height: 10vh;
    }
    </style>
</head>

<body>



    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


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


        <div class="container-of-providers">
            <header>Add Your Information</header>
            <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="input-box">
                    <label>Full Name</label>
                    <input type="text" placeholder="Enter full name" id="full_name" name="full_name" required />
                </div>
                <div class="input-box">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter email address" id="email" name="email" required />
                </div>
                <div class="column">
                    <div class="input-box">
                        <label>Phone Number</label>
                        <input type="number" placeholder="Enter phone number" id="phone_number" name="phone_number"
                            required />
                    </div>
                </div>
                <div class="gender-box">
                    <h3>Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-male" name="gender" checked />
                            <label for="check-male">male</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-female" name="gender" />
                            <label for="check-female">Female</label>
                        </div>
                    </div>
                </div>
                <div class="input-box address">
                    <label>Address</label>
                    <input type="text" placeholder="Enter street address" id="street_address" name="street_address"
                        required />
                    <div class="column">
                        <div class="select-box">
                            <select name="occupation">
                                <option hidden>Occupation</option>
                                <option>Electrician</option>
                                <option>Plumber</option>
                                <option>Carpenter</option>
                                <option>Welder</option>
                                <option>Labourer</option>
                                <option>Rickshaw</option>
                                <option>Loader Rickshaw</option>
                            </select>
                        </div>
                        <div class="select-box">
                            <select name="experience">
                                <option hidden>Work Experience</option>
                                <option>1-2 years</option>
                                <option>3-5 years</option>
                                <option>5-10 years</option>
                            </select>
                        </div>
                    </div>
                    <div class="gender-box">
                        <h3>Available</h3>
                        <div class="gender-option">
                            <div class="gender">
                                <label for="check-male">From :</label>
                                <input type="time" id="check-male" name="available_from" checked />
                            </div>
                            <div class="gender">
                                <label for="check-female">To :</label>
                                <input type="time" id="check-female" name="available_to" />
                            </div>
                        </div>
                    </div>
                </div>
                <button>Add My Service</button>
            </form>
        </div>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Arif Colony, Bahawalpur, PAK</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+92 307 0177 697</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>Bits&Bytes.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="index.html">Service Bulao</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">Bits&Bytes</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>