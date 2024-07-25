<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

        <!-- Styles -->
        @vite(['resources/css/app.scss' , 'resources/js/app.js'])
        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        @livewireStyles
    </head>
    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                        <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
                            <div class="dropdown-menu rounded">
                                <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="services.html" class="nav-item nav-link">Services</a>
                        <a href="packages.html" class="nav-item nav-link">Packages</a>
                        <a href="blog.html" class="nav-item nav-link">Blog</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="tour.html" class="dropdown-item">Explore Tour</a>
                                <a href="booking.html" class="dropdown-item">Travel Booking</a>
                                <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                                <a href="guides.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <a href="#" class="d-lg-none nav-item nav-link">Iniciar Sesión</a> </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->
        
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
    
    
        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0">
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-1.jpg">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-2.jpg">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-3.jpg">
                            </div>
                            <div class="col-6">
                                <div class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                                    <div class="icon-box-light">
                                        <i class="bi bi-award text-secondary"></i>
                                    </div>
                                    <h1 class="display-1 text-white mb-0" data-toggle="counter-up">25</h1>
                                    <small class="fs-5 text-white">Years Experience</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-6 mb-4">Trusted Lab Experts and Latest Lab Technologies</h1>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                        <div class="row g-4 g-sm-5 justify-content-center">
                            <div class="col-sm-6">
                                <div class="about-fact btn-square flex-column rounded-circle bg-primary ms-sm-auto">
                                    <p class="text-white mb-0">Awards Winning</p>
                                    <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                                </div>
                            </div>
                            <div class="col-sm-6 text-start">
                                <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                                    <p class="text-white mb-0">Complete Cases</p>
                                    <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                                    <p class="text-white mb-0">Happy Clients</p>
                                    <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    
    
        <!-- Features Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-0 feature-row">
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="feature-item border h-100 p-5">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-award text-secondary"></i>
                            </div>
                            <h5 class="mb-3">Award Winning</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="feature-item border h-100 p-5">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-people text-secondary"></i>
                            </div>
                            <h5 class="mb-3">Expet Doctors</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="feature-item border h-100 p-5">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-cash-coin text-secondary"></i>
                            </div>
                            <h5 class="mb-3">Fair Prices</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                        <div class="feature-item border h-100 p-5">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-headphones text-secondary"></i>
                            </div>
                            <h5 class="mb-3">24/7 Support</h5>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->
    
    
        <!-- Features Start -->
        <div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-6 pt-lg-5">
                        <div class="bg-white p-5 mt-lg-5">
                            <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">The Best Medical Test & Laboratory Solution</h1>
                            <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                            <div class="row g-5 pt-2 mb-5">
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="icon-box-primary mb-4">
                                        <i class="bi bi-person-plus text-secondary"></i>
                                    </div>
                                    <h5 class="mb-3">Experience Doctors</h5>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                </div>
                                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                    <div class="icon-box-primary mb-4">
                                        <i class="bi bi-check-all text-secondary"></i>
                                    </div>
                                    <h5 class="mb-3">Advanced Microscopy</h5>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                </div>
                            </div>
                            <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="">Explore More</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row h-100 align-items-end">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                                    <button type="button" class="btn-play" data-bs-toggle="modal"
                                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="bg-primary p-5">
                                    <div class="experience mb-4 wow fadeIn" data-wow-delay="0.3s">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="text-white">Sample Preparation</span>
                                            <span class="text-white">90%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="experience mb-4 wow fadeIn" data-wow-delay="0.4s">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="text-white">Result Accuracy</span>
                                            <span class="text-white">95%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="experience mb-0 wow fadeIn" data-wow-delay="0.5s">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="text-white">Lab Equipments</span>
                                            <span class="text-white">90%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->
    
    
        <!-- Video Modal Start -->
        <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->
    
    
        <!-- Service Start -->
        <div class="container-fluid container-service py-5">
            <div class="container pt-5">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="display-6 mb-3">Reliable & High-Quality Laboratory Service</h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-heart-pulse text-secondary"></i>
                            </div>
                            <h5 class="mb-3">Pathology Testing</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-lungs text-secondary"></i>
                            </div>
                            <h5 class="mb-3">Microbiology Tests</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-virus text-secondary"></i>
                            </div>
                            <h5 class="mb-3">Biochemistry Tests</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-capsule-pill text-secondary"></i>
                            </div>
                            <h5 class="mb-3">Histopatology Tests</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-capsule text-secondary"></i>
                            </div>
                            <h5 class="mb-3">Urine Tests</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-prescription2 text-secondary"></i>
                            </div>
                            <h5 class="mb-3">Blood Tests</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-clipboard2-pulse text-secondary"></i>
                            </div>
                            <h5 class="mb-3">Fever Tests</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-file-medical text-secondary"></i>
                            </div>
                            <h5 class="mb-3">Allergy Tests</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
    
    
        <!-- Appoinment Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-4">We Ensure You Will Always Get The Best Result</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                            <div class="icon-box-primary">
                                <i class="bi bi-geo-alt text-secondary fs-1"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Office Address</h5>
                                <span>123 Street, New York, USA</span>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                            <div class="icon-box-primary">
                                <i class="bi bi-clock text-secondary fs-1"></i>
                            </div>
                            <div class="ms-3">
                                <h5>Office Time</h5>
                                <span>Mon-Sat 09am-5pm, Sun Closed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <h2 class="mb-4">Online Appoinment</h2>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                    <label for="mail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                    <label for="mobile">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <select class="form-select" id="service">
                                        <option selected>Pathology Testing</option>
                                        <option value="">Microbiology Tests</option>
                                        <option value="">Biochemistry Tests</option>
                                        <option value="">Histopatology Tests</option>
                                    </select>
                                    <label for="service">Choose A Service</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 130px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appoinment Start -->
    
    
        <!-- Team Start -->
        <div class="container-fluid container-team py-5">
            <div class="container pb-5">
                <div class="row g-5 align-items-center mb-5">
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-6 mb-3">Dr. John Martin</h1>
                        <p class="mb-1">CEO & Founder</p>
                        <p class="mb-5">Labsky, New York, USA</p>
                        <h3 class="mb-3">Biography</h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                        <div class="d-flex">
                            <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Alex Robin</h5>
                                <span>Lab Assistant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Andrew Bon</h5>
                                <span>Lab Assistant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Martin Tompson</h5>
                                <span>Lab Assistant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/team-5.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">Clarabelle Samber</h5>
                                <span>Lab Assistant</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
    
    
        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container pt-5">
                <div class="row gy-5 gx-0">
                    <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-white mb-4">What Clients Say About Our Lab Services!</h1>
                        <p class="text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                        <a href="" class="btn btn-primary py-3 px-5">More Testimonials</a>
                    </div>
                    <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-white p-5">
                            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                                <div class="testimonial-item">
                                    <div class="icon-box-primary mb-4">
                                        <i class="bi bi-chat-left-quote text-secondary"></i>
                                    </div>
                                    <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0" src="img/testimonial-1.jpg" alt="">
                                        <div class="ps-3">
                                            <h5 class="mb-1">Client Name</h5>
                                            <span class="text-primary">Profession</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="icon-box-primary mb-4">
                                        <i class="bi bi-chat-left-quote text-secondary"></i>
                                    </div>
                                    <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0" src="img/testimonial-2.jpg" alt="">
                                        <div class="ps-3">
                                            <h5 class="mb-1">Client Name</h5>
                                            <span class="text-primary">Profession</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    
    
        <!-- Footer Start -->
        <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5 py-5">
                    <div class="col-lg-6 pe-lg-5">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="h1 text-primary mb-0">Lab<span class="text-white">sky</span></h1>
                        </a>
                        <p class="fs-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
                        <p><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-2"></i>info@example.com</p>
                        <div class="d-flex mt-4">
                            <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <div class="row g-5">
                            <div class="col-sm-6">
                                <h4 class="text-light mb-4">Quick Links</h4>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Our Services</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-sm-6">
                                <h4 class="text-light mb-4">Popular Links</h4>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Our Services</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-sm-12">
                                <h4 class="text-light mb-4">Newsletter</h4>
                                <div class="w-100">
                                    <div class="input-group">
                                        <input type="text" class="form-control border-0 py-3 px-4" style="background: rgba(255, 255, 255, .1);" placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    
    
        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark text-white-50 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="mb-0">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <p class="mb-0">Designed by <a href="https://htmlcodex.com">HTML Codex</a><br>Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    
        <!-- JavaScript Libraries -->
        <script src="js/jquery 3.6.1.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        @livewireScripts
    </body>
</html>
