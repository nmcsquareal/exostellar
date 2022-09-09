<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monda:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c8fd3af515.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/PicOfTheDay.js"></script>
    <title>EXOSTELLAR</title>
</head>


<body class="bg-black">
    <!-- Header/NavBar -->
    <header id="header" class="position-relative bg-black">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-black text-info">
                <div class="container-fluid">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/logo2 - Copy.png" class="logo-nav w-100" alt="logo">
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
                                    href="index.php">HOME</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="btn btn-outline-info rounded-0 border-0" href="pages/about.php">ABOUT</a>
                            </li>
                            <li class="nav-item dropdown px-3">
                                <a class="btn btn-outline-info rounded-0 border-0 dropdown-toggle" href="#"
                                    id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    MENU
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark rounded-0" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="pages/SpaceExploration.php">SPACE
                                            EXPLORATION</a></li>

                                    <li><a class="dropdown-item" href="pages/MoonExploration.php">MOON EXPLORATION</a>
                                    </li>
                                    <li><a class="dropdown-item" href="pages/Quiz.php">QUIZ</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- HeroSection -->
    <section class="hero bg-black">
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-sm-12 m-0 p-0" data-aos="zoom-in">
                    <video src="vid/HeroVid.webm" class="w-100 h-auto" autoplay muted loop></video>
                    <div class="content">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container" data-aos="fade-right">
        <div class="row d-flex align-items-center justify-content-center text-center text-light pb-5 ">
            <div class="display-3 m-5 text-stroke p-4">
                What to Learn?
            </div>
            <br />
            <div class="fs-4 pt-3 pb-5 text-info">
                Let's learn the properties of the Universe by understanding the history of space exploration as well
                as awakening our senses as we view what it is like outerspace, using NASA's technology. <br /><br />
                This course will mainly focus on NASA's space exploration: the planet Mars, the Moon, different
                technologies,.etc.
            </div>
            <div class="col-lg-6 mt-3 mb-5">
                <a type="button" href="pages/SpaceExploration.php"
                    class="btn btn-lg btn-outline-info rounded-0">Click here to start Space Exploration</a>
            </div>
            <div class="col-lg-6 mt-3 mb-5">
                <a type="button" href="pages/MoonExploration.php"
                    class="btn btn-lg btn-outline-info rounded-0">Click here to start Moon Exploration</a>
            </div>


        </div>
    </div>


    <!-- MainSection -->
    <div class="container-fluid bg-dark pb-5" data-aos="fade-left">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center ">
                <h1 class="display-4 text-center text-stroke pb-4 pt-5 mt-2">NASA's Pic of the Day</h1>
                <div class="col-lg-6">
                    <div class="card bg-dark text-info border-0">
                        <h2 id="title-of-the-day" class="mx-auto mt-3 mb-1"></h2>
                        <div class="mx-auto mb-2 mt-1 w-100 text-center" id="pic-of-the-day">
                        </div>
                        <p id="copy-of-the-day" class="text-center"></p>
                        <p id="date-of-the-day" class="text-center"></p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card bg-dark text-info border-0">
                        <p id="exp-of-the-day" class="text-start py-5 px-3"></p>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- Scroll-up function -->
    <div id="jsScroll" class="scroll" onclick="scrollToTop();">
        <i><img src="img/scrollUp.svg" alt="" width="50" height="50"></i>
    </div>
    <!-- FooterSection -->
    <div class="container-fluid bg-black">
        <footer class="container py-5">
            <div class="row text-info ">


                <div class="col-sm-3">
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
                        <li class="nav-item mb-2"><a href="index.php" class="nav-link text-info p-0">Home</a></li>
                        <li class="nav-item mb-2"><a href="pages/about.php" class="nav-link text-info p-0">About</a>
                        </li>
                        <li class="nav-item mb-2"><a href="pages/SpaceExploration.php"
                                class="nav-link text-info p-0">Space Exploration</a></li>
                        <li class="nav-item mb-2"><a href="pages/MoonExploration.php"
                                class="nav-link text-info p-0">Moon Exploration</a></li>
                        <!-- <li class="nav-item mb-2"><a href="#" class="nav-link text-info p-0">Quiz</a></li> -->
                    </ul>
                </div>

                <div class="col-sm-4">
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

                <div class="col-sm-4 offset-1">
                    <form action="send.php" method="post">
                        <h5>Subscribe to our newsletter</h5>
                        <p>Get latest news from EXOSTELLAR</p>
                        <div class="d-flex w-100 gap-2">

                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control me-2 rounded-0 bg-dark border-info text-light"  name="emailadd"
                                placeholder="Email address">
                            <button type="submit" class="btn btn-outline-info rounded-0" name="subscribetous">Subscribe</button>
                            
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

<script src="js/scrolltopbtn.js"></script>

</body>

</html>