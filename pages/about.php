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
    <link rel="stylesheet" href="../css/style.css">
    <title>About</title>
</head>

<body class="bg-black">
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
                                <a class="btn btn-outline-info rounded-0 border-0" href="about.php">ABOUT</a>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slideshow-container">
                        <div class="mySlides">
                            <img id="img1" src="" class="w-100">
                            <div class="text-info p-0 m-0">Actual Image of the earth taken by the Earth Polychromatic
                                Imaging Camera (EPIC)</div>
                        </div>
                        <div class="mySlides">
                            <img id="img2" src="" class="w-100">
                            <div class="text-info p-0 m-0">Actual Image of the earth taken by the Earth Polychromatic
                                Imaging Camera (EPIC)</div>
                        </div>
                        <div class="mySlides">
                            <img id="img3" src="" class="w-100">
                            <div class="text-info p-0 m-0">Actual Image of the earth taken by the Earth Polychromatic
                                Imaging Camera (EPIC)</div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-6 text-info p-5 my-auto" data-aos="fade-left">
                    <h1 class="display-5">What is the website about?</h1>
                    <p>Exostellar is taken from two words: exo - beyond and stellar - star.
                        It is an online resource material for
                        senior high students who are taking the subject of Astronomy.
                        This online resource material is made accessible for students to help them study
                        their lesson remotely for blended learning.
                        <br /><br />
                        Included in this online material is NASA's API (Application Programming Interface)
                        and other astronomy related topics taken mostly from NASA's official website.
                        <br /><br />
                        Learning this subject will not only allow students to see what it is like beyond space but they
                        will also learn the importance of learning the subject and how it relates to other
                        discipline as well.
                        <br /><br />
                    </p>
                </div>
            </div>



        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <h1 class="col-lg-12 display-5 mx-auto m-5 text-stroke p-4">
                    The Developers
                </h1>
                <section class="mb-5">

                    <div class="container card-group">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 ">
                                <div
                                    class="content-container card bg-black text-info rounded-0 border-info border border-3 mx-3" >
                                    <img class="card-img-top h-75" src="../img/dev1.jpg">
                                    <p class="card-text">
                                    <ul class="nav flex-column">
                                        <li class="nav-item px-2">Name: Alyssa Jagonob</li>
                                        <li class="nav-item px-2">Subject: Philosophy</li>
                                        <li class="nav-item px-2">More info: Part time teacher; part time programmer
                                        </li>

                                    </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 ">
                                <div
                                    class="content-container card bg-black text-info rounded-0 border-info border border-3 mx-3" >
                                    <img class="card-img-top h-75" src="../img/dev3.png">
                                    <p class="card-text">
                                    <ul class="nav flex-column">
                                        <li class="nav-item px-2">Name: Neal Dyxther Centino</li>
                                        <li class="nav-item px-2">Subject: Physical Science</li>
                                        <li class="nav-item px-2">More info: Full time programmer; part time scientist
                                        </li>

                                    </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 ">
                                <div
                                    class="content-container card bg-black text-info rounded-0 border-info border border-3 mx-3" >
                                    <img class="card-img-top h-75" src="../img/dev2.png">
                                    <p class="card-text">
                                    <ul class="nav flex-column">
                                        <li class="nav-item px-2">Name: June Rey Palabrica</li>
                                        <li class="nav-item px-2">Subject: Database</li>
                                        <li class="nav-item px-2">More info: part time teacher; part time athlete</li>

                                    </ul>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>


            </div>
        </div>
    </section>
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
                            <button type="submit" class="btn btn-outline-info rounded-0" name="subscribeAbout">Subscribe</button>
                            
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top text-info">
                <p>&copy; 2022 Exostellar, Inc. All rights reserved.</p>
            </div>
        </footer>
    </div>
    <script src="../js/About.js"></script>
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