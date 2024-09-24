<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PlacementCell</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

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
        h6{
            font-size: 50px;
        }
        .noti{
            position: relative;
            margin: 200px;
            padding: 20px;
            width: 150px;
            height: 150px;
            border-radius: 20px;
            background:white;
        }.ico{
            width: 100px;
            height:100px;
        }span{
            background: red;
            padding: 20px;
            border-radius: 50px;
            color: white;
            position: absolute;
        }
    </style>
</head>

<body>
<div class="noti">
        <img src ="bell.png" class="ico">
        <span>12</span>
    </div>

    <!-- Placement Notification Container -->
    <div id="" class="position-fixed top-0 end-0 p-3" style="z-index: 1000; display: none;"></div>




    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
       <!-- Navbar Start -->
       <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img height="70px"  src="img/suiitlogo.png" alt="">  PlacementCell</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="job update.html" class="nav-item nav-link">Updates</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Learning Hub</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="Learning/learn.html" class="dropdown-item">Learn!</a>
                        <a href="Learning/REVIEW.html" class="dropdown-item">Review</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="apply.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Apply NOC <i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    
    <!-- Navbar End -->
    


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/college.jpeg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h6  class="display-3 text-white animated slideInDown">Navigating Your Career Path: Let Our Placement Cell Light the Way </h6>
                                <p class="fs-5 text-white mb-4 pb-2"> Empowering Your Career Journey. Our Placement Cell is your bridge to industry connections, internship opportunities, and a bright future.</p>
                                <!-- Notification Container -->
                            <div id="notification-container" class="position-fixed top-0 end-0 p-3" style="z-index: 1000;">
                                   </div>
                                <!-- Declare button -->
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" onclick= "handleDeclareButtonClick()" >DECLARE...</a>

                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/college-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h6 class="display-3 text-white animated slideInDown">Explore, Connect, Succeed - it all starts here with our Placement Cell</h6>
                                <p class="fs-5 text-white mb-4 pb-2">Our Placement Cell guides, prepares, and connects talents with top-notch opportunities, shaping successful careers and fostering industry leaders.</p>
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" onclick="showPlacementNotification()">DECLARE...</a>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <img height="60px" src="img/companylogo.png">

                            <h1 class="mb-3">200+</h1>
                            <h2>Companies</h2>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <img height="50px" src="img/hiring.png">
                            <h1 class="mb-3">25 L</h1>
                            <h2>Highest Package</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <img height="50px" src="img/avgpcg.png">
                            <h1 class="mb-3">5 L</h1>
                            <h2>Average Package</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <img height="50px" src="img/placement.png">
                            <h1 class="mb-3">250+</h1>
                            <h2>Placements</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/college.jpeg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to SUIIT</h1>
                    <p class="mb-4">Sambalpur University Institute of Information Technology(SUIIT) was established in the year 2010 by Sambalpur University as a constituent autonomous Unit in the line of IIITs with the approval of the Department of Higher Education, Govt. of Odisha, to impart training and to have quality research programme relating to Information Technology and allied subjects.</p>
                    <p class="mb-4"> SUIIT is an unique venture to make use of the decades of rich academic experience and achievements of the University in diverse fields for nurturing the young minds in the contemporary globalized environment where the demand is for innovation, research and technical skill of international standard.</p>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Alina Soy</h5>
                    <p>Machine Learning Engineer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The college offers a wide range of programs and courses, and I appreciated the flexibility to tailor my academic path. Professors are knowledgeable and approachable, but the quality of instruction varied across departments.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sahil Sarma</h5>
                    <p>Back-End Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The college's career services were invaluable in helping me secure internships and, eventually, a job after graduation. They offer resume workshops, interview preparation, and job fairs.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Sai Sambit Pradhan</h5>
                    <p>Data Scientist</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Student life at SUIIT is vibrant. There are numerous clubs, organizations, and extracurricular activities to choose from. I joined a few clubs and made lifelong friends.The alumni network is strong and actively involved in mentoring current students.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">M.Bhargavi</h5>
                    <p>Software Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">I have spent four transformative years at [College Name], and reflecting on my journey, I can confidently say that it has been an enriching experience. From academics to extracurricular activities, this college has offered a diverse and nurturing environment that has helped shape my future in ways I hadn’t imagined.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jyoti Vihar , Burla, Sambalpur</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+9123467890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>placement@suuit.ac.in</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
   <!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- Add this script section at the end of your HTML body -->
<script>
    // Function to show placement-related notification
    function showPlacementNotification(message, type = 'info') {
        // Create a new notification element
        var notificationElement = document.createElement('div');
        notificationElement.className = 'alert alert-' + type + ' alert-dismissible fade show';
        notificationElement.setAttribute('role', 'alert');
        notificationElement.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        `;

        // Append the notification to the notification container
        var notificationContainer = document.getElementById('notification-container');
        notificationContainer.innerHTML = ''; // Clear existing notifications
        notificationContainer.appendChild(notificationElement);

        // Show the notification container
        notificationContainer.style.display = 'block';

        // Bootstrap's alert dismissal requires Bootstrap JS and Popper.js
        // Ensure that you have included Bootstrap JS and Popper.js in your HTML file
    }

    // Example: Trigger notification when the "Declare" button is clicked
    function handleDeclareButtonClick() {
        // Customize the message as per your requirement
        var declareMessage = 'Declaration submitted successfully!';
        showPlacementNotification(declareMessage, 'success');
    }
</script>




    

</body>

<!-- Update your existing script section with the following changes -->




</html>