<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS + Bootstrap-->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monda:wght@400;700&display=swap" rel="stylesheet">

    <!--Leaflet Map API (for the ISS Locator)-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/b068262b7e.js" crossorigin="anonymous"></script>
    <!-- scrollTopBtn -->
    

    <title>Formative Quiz</title>
</head>

<body>
    <!-- Header/NavBar -->
    <header id="header" class="position-relative bg-black">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-black text-info">
                <div class="container-fluid">
                    <a href="../index.php" class="navbar-brand">
                        <img src="../img/logo2 - Copy.png" class="logo-nav w-100" alt="logo">
                        <!-- <p>EXOSTELLAR</p> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-info ">
                            <li class="nav-item px-3">
                                <a class="btn btn-outline-info rounded-0 border-0" aria-current="page"
                                    href="../index.php">HOME</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="btn btn-outline-info rounded-0 border-0" href="../pages/about.php">ABOUT</a>
                            </li>
                            <li class="nav-item dropdown px-3">
                                <a class="btn btn-outline-info rounded-0 border-0 dropdown-toggle" href="#"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    MENU
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark rounded-0" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../pages/SpaceExploration.php">SPACE
                                            EXPLORATION</a></li>

                                    <li><a class="dropdown-item" href="../pages/MoonExploration.php">MOON EXPLORATION</a>
                                    </li>
                                    <li><a class="dropdown-item" href="../pages/Quiz.php">QUIZ</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="QuizCard bg-black">
        <div class="container-fluid pb-5">
            <div class="row pd-5" data-aos="zoom-in">
                <div class="col-12 w-75 mx-auto">
                    <h1 class="page-title display-1 mt-5 pt-5 text-light text-center glow" >
                        Test your Knowledge!
                    </h1>
                    <h3 class="page-subtitle text-light text-center text-stroke py-5">
                        Click the button below to start the quiz. <br/>
                    Read the instructions carefully before answering. <br/>
                All the best to you! </h2>
                <div class="row row d-flex align-items-center justify-content-center text-center text-light pb-5">
                    <div class="col-lg-6 mt-3">
                        <a type="button" href="https://player.quizalize.com/quiz/dc845fba-fba7-4d83-8ba2-99f7ddb2679f"
                            class="btn btn-lg btn-outline-info rounded-0" target="_blank">Start Quiz for MARS Exploration</a>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <a type="button" href="https://player.quizalize.com/quiz/af1f9fc9-507c-4f64-8db3-210fc868b8b0"
                            class="btn btn-lg btn-outline-info rounded-0" target="_blank">Start Quiz for MOON Exploration</a>
                    </div>
                </div>

                </div>
            </div>
        </div>
        
    </div>
    
    <!-- Scroll-up function -->
    <div id="jsScroll" class="scroll" onclick="scrollToTop();">
        <i><img src="../img/scrollUp.svg" alt="" width="50" height="50"></i>
    </div>
   
    <!-- FooterSection -->
    <div class="container-fluid bg-black">
        <footer class="container py-5">
            <div class="row text-info ">


                <div class="col-3">
                    <h5>References:</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="https://api.nasa.gov/"
                                class="nav-link text-info p-0">https://api.nasa.gov/</a></li>
                        <li class="nav-item mb-2"><a href="https://www.timeanddate.com"
                                class="nav-link text-info p-0">https://www.timeanddate.com</a></li>
                        <li class="nav-item mb-2"><a href="https://www.space.com"
                                class="nav-link text-info p-0">https://www.space.com</a></li>

                    </ul>
                    <h5 class="pt-3">Useful Links:</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="../index.php" class="nav-link text-info p-0">Home</a></li>
                        <li class="nav-item mb-2"><a href="../pages/about.php" class="nav-link text-info p-0">About</a>
                        </li>
                        <li class="nav-item mb-2"><a href="../pages/SpaceExploration.php"
                                class="nav-link text-info p-0">Space Exploration</a></li>
                        <li class="nav-item mb-2"><a href="../pages/MoonExploration.php"
                                class="nav-link text-info p-0">Moon Exploration</a></li>
                        <!-- <li class="nav-item mb-2"><a href="#" 
                            class="nav-link text-info p-0">Quiz</a></li> -->
                    </ul>
                </div>

                <div class="col-4">
                    <h5>Contact</h5>
                    <p>For inquiries, comments or suggestions you may email us @
                        <strong>support.help@exostellar.com</strong> or contact us using the following below:
                    </p>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a class="nav-link text-info p-0">0009-001-0123</a></li>
                        <li class="nav-item mb-2"><a class="nav-link text-info p-0">0009-001-0456</a></li>
                        <li class="nav-item mb-2"><a class="nav-link text-info p-0">0009-001-0789</a></li>

                    </ul>
                </div>

                <div class="col-4 offset-1">
                <form action="../send.php" method="post">
                        <h5>Subscribe to our newsletter</h5>
                        <p>Get latest news from EXOSTELLAR</p>
                        <div class="d-flex w-100 gap-2">

                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control me-2 rounded-0 bg-dark border-info text-light"  name="emailadd"
                                placeholder="Email address">
                            <button type="submit" class="btn btn-outline-info rounded-0" name="subscribeQ">Subscribe</button>
                            
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top text-info">
                <p>&copy; 2022 Exostellar, Inc. All rights reserved.</p>
            </div>
        </footer>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        easing: 'linear',
        once: true,
        duration: 700,
      });
    </script>
    <script src="../js/scrolltopbtn.js"></script>
   
       
</body>

</html>