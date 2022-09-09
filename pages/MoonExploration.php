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
    
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/b068262b7e.js" crossorigin="anonymous"></script>

    <title>Moon Exploration</title>
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

                                    <li><a class="dropdown-item" href="MoonExploration.php">MOON EXPLORATION</a>
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

    <!--Header part (Contains - page title, subtitle, summary of page content)-->
    <header class="header p-3 bg-dark">
        <h1 class="page-title display-1 mt-3 text-light text-center glow">Exploring the Moon</h1>
        <h2 class="page-subtitle text-light text-center text-stroke">Illuminating the Darkness</h2>

        <div class="container card-group text-center mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">
                    <div class="content-container card bg-black text-info rounded-0 border-info border border-3">
                        <a href="#moonBackground" class="noUnderline">
                        <img class="card-img-top" src="../img/moon-craters.jpg">
                        <p class="card-text mt-2 p-1 fs-4">Background of the Moon</p>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">
                    <div class="content-container card bg-black text-info rounded-0 border-info border border-3">
                        <a href="#theia-moon" class="noUnderline">
                        <img class="card-img-top" src="../img/theia.jpg" >
                        <p class="card-text mt-2 p-1 fs-4">Theia - Moon's Geological History</p>
                   </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">
                    <div class="content-container card bg-black text-info rounded-0 border-info border border-3">
                        <a href="#moonPhases" class="noUnderline">
                        <img class="card-img-top" src="../img/moon-phases.png" >
                        <p class="card-text mt-2 p-1 fs-4">Phases of the Moon</p>
                    </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">
                    <div class="content-container card bg-black text-info rounded-0 border-info border border-3">
                        <a href="#" class="noUnderline">
                        <img class="card-img-top" src="../img/apollo-11.jpg" >
                        <p class="card-text mt-2 p-1 fs-4">Moon Exploration and Human Presence</p>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--Short Background of the Moon-->
    <section class="moonBackground bg-black py-5" id="moonBackground">
        <div class="container-fluid bg-black text-light w-75">
            <h1 class="display-4 text-center text-stroke pb-5">Moon - Background</h1>
            <p class="text-justify pb-3 text-info">The Moon is Earth's only natural satellite. It is about one-quarter of Earth in diameter 
                (comparable to the width of Australia). In the Solar System it is the fifth largest satellite, 
                larger than any of the known dwarf planets and the largest (and most massive) satellite of a 
                planet relative to the planet. The Moon is a planetary-mass object that formed a differentiated 
                rocky body, making it a satellite planet under the geophysical definitions of the term.
            </p>
            <div class="moon-char card mb-5 p-3 border-info rounded-0 bg-dark border border-3">
                <div class="row">
                    <div class="col-lg-3 justify-content-center">
                        <button id="physical-char-btn" class="btn btn-outline-info rounded-0 mb-3 mt-3 ms-3">Physical</button>
                        <button id="orbital-char-btn" class="btn btn-outline-info rounded-0 mb-3 ms-3">Orbital</button>
                        <button id="atmos-char-btn" class="btn btn-outline-info rounded-0 mb-3 ms-3">Atmosphere</button>
                    </div>
                    <div class="moon-char-container col-lg-9 mt-3" >
                        <h1 id="char-title-card" class="text-end"></h1>
                        <p id="first-char-card" class="text-end"></p>
                        <p id="sec-char-card" class="text-end"></p>
                        <p id="third-char-card" class="text-end"></p>
                        <p id="fourth-char-card" class="text-end"></p>
                        <p id="fifth-char-card" class="text-end"></p>
                        <p id="sixth-char-card" class="text-end"></p>
                        <p id="seventh-char-card" class="text-end"></p>
                        <p id="eighth-char-card" class="text-end"></p>
                        <p id="ninth-char-card" class="text-end"></p>
                        <p id="tenth-char-card" class="text-end"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="physical-char-moon container w-75" data-aos="fade-right">
            <h3 class="display-4 text-center text-stroke pb-5">Physical Characteristics</h3>
            <img src="../img/moon-topo.png" class="m-3">
            <p class="physical-descr text-justify text-info">The Moon is a very slightly scalene ellipsoid due to tidal stretching, 
                with its long axis displaced 30° from facing the Earth, due to gravitational 
                anomalies from impact basins. Its shape is more elongated than current tidal forces 
                can account for. This 'fossil bulge' indicates that the Moon solidified when it orbited 
                at half its current distance to the Earth, and that it is now too cold for its shape to 
                adjust to its orbit.</p>
    
            <p class="physical-descr text-justify text-info">The highest elevations of the Moon's surface are located 
                directly to the northeast, which might have been thickened by the oblique formation 
                impact of the South Pole - Aitken basin. Other large impact basins such as Imbrium, Serenitatis, 
                Crisium, Smythii, and Orientale possess regionally low elevations and elevated rims. The far 
                side of the lunar surface is on average about 1.9 km (1.2 mi) higher than that of the near side.
            </p>
    
            <p class="geophysical-descr text-justify text-info">The topography of the Moon has been measured with laser altimetry and stereo image analysis. 
                Its most extensive topographic feature is the giant far-side South Pole - Aitken basin, some 2,240 km 
                (1,390 mi) in diameter, the largest crater on the Moon and the second-largest confirmed impact 
                crater in the Solar System. At 13 km (8.1 mi) deep, its floor is the lowest point on 
                the surface of the Moon. 
            </p>
        </div>
            
               
        <div class="container text-info w-75" data-aos="fade-left">
            <p class="display-6 pt-3 mt-5 text-info">Major Geologic Features include:</p> 
            <div class="row ">
                <div class="col-sm-2 d-flex align-items-center justify-content-end">
                    <i class="fa-solid fa-volcano icon-moon-gerophysical"></i>
                </div>
                <div class="col-sm-10">
                    <h3>Volcanic Features</h3>
                    <p>The main features visible from Earth by the naked eye are dark and relatively 
                        featureless lunar plains called maria (singular mare; Latin for "seas", as they 
                        were once believed to be filled with water)  are vast solidified pools of 
                        ancient basaltic lava.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-2 d-flex align-items-center justify-content-end">
                    <i class="fa-solid fa-meteor icon-moon-gerophysical"></i>
                </div>
                <div class="col-sm-10">
                    <h3>Impact craters</h3>
                    <p>A major geologic process that has affected the Moon's surface is impact cratering, 
                        with craters formed when asteroids and comets collide with the lunar surface. There 
                        are estimated to be roughly 300,000 craters wider than 1 km (0.6 mi) on the Moon's near side.
                        with the lunar surface. There are estimated to be roughly 300,000 craters wider than 
                        1 km (0.6 mi) on the Moon's near side.
                    </p>
                </div>
            </div>
            <div class="row mt-3 mb-5">
                <div class="col-sm-2 d-flex align-items-center justify-content-end">
                    <i class="fa-solid fa-tornado float-end icon-moon-gerophysical"></i>
                </div>
                <div class="col-sm-10">
                    <h3>Lunar Swirls</h3>
                    <p>
                        Lunar swirls are enigmatic features found across the Moon's surface. They
                         are characterized by a high albedo, appear optically immature (i.e. the optical 
                         characteristics of a relatively young regolith), and often have a sinuous shape. They are 
                         hypothesized to be areas that have been partially shielded from the solar wind, resulting 
                         in slower space weathering.
                    </p>
                </div>
            </div>
        </div>
        <div class="chem-char container my-5 text-info w-75">
            <h3 class="display-4 text-center text-stroke pb-5">Chemical Characteristics</h3>
            <img src="../img/lunar-soil-composition.png" class="m-3 bg-info" data-aos="zoom-in">
            <p class="chem-descr text-justify">
                Blanketed on top of the Moon's crust is a highly comminuted (broken into ever smaller particles) 
                and impact gardened mostly gray surface layer called regolith, formed by impact processes. 
                The finer regolith, the lunar soil of silicon dioxide glass, has a texture resembling snow 
                and a scent resembling spent gunpowder. The regolith of older surfaces is generally thicker than 
                for younger surfaces: it varies in thickness from 10-15 m (33-49 ft) in the highlands and 4-5 m (13-16 ft)
                 in the maria. Beneath the finely comminuted regolith layer is the megaregolith, a layer 
                 of highly fractured bedrock many kilometers thick.
            </p>
            <p class="chem-descr text-justify">
                Liquid water cannot persist on the lunar surface. When exposed to solar radiation, water 
                quickly decomposes through a process known as photodissociation and is lost to space. However, 
                since the 1960s, scientists have hypothesized that water ice may be deposited by impacting comets 
                or possibly produced by the reaction of oxygen-rich lunar rocks, and hydrogen from solar wind, 
                leaving traces of water which could possibly persist in cold, permanently shadowed craters at either 
                pole on the Moon.
            </p>
            <p class="chem-descr text-justify">
                Analysis of the findings of the Moon Mineralogy Mapper (M3) revealed in August 2018 for the first time "definitive evidence" 
                for water-ice on the lunar surface. The data revealed the distinct reflective signatures of water-ice, 
                as opposed to dust and other reflective substances. The ice deposits were found on the North and South 
                poles, although it is more abundant in the South, where water is trapped in permanently shadowed craters 
                and crevices, allowing it to persist as ice on the surface since they are shielded from the sun.
            </p>
        </div>
    </section>
    
    <!--Geological History of the Moon-->
    <div class="theia-moon container-fluid bg-dark text-light pb-5" id="theia-moon">
        <div class="container w-75 pt-3">
            <h1 class="display-4 text-center text-stroke py-5">How was the Moon formed ?</h1>
            <div class="row mb-5">
                <div class="col-md-4">
                    <img src="../img/protoplanetary-disk.jpg" data-aos="zoom-in">
                    <p class="p-2 text-center"><i>A protoplanetary disk made of dense gas and dust surrounding a young newly formed star.</i></p>
                </div>
                <div class="col-md-8 moon-formation-hypothesis fs-4">
                    From the beginning of modern astronomy, there have been at least 
                    four hypotheses for the origin of the Moon:
                    <ol class="mt-4">
                        <li>A single body split into Earth and Moon</li>
                        <li>The Moon was captured by Earth's gravity (as most of the outer planets' smaller moons were captured)</li>
                        <li>The Earth and Moon formed at the same time when the protoplanetary disk accreted</li>
                        <li>The Moon formed from the ejecta of a collision between the proto-Earth and a Mars-sized planet</li>
                    </ol>
                </div>
                
            </div>
            <h1 class="display-4 text-center text-stroke py-3">Theia - Giant Impact Hypothesis</h1>
            <div class="theia-impact-container my-5 w-100">
                <img src="../img/giant-impact-representation.png">
            </div>

            <div class="theia-animation ms-4 mt-2">
                <img src="../img/theia-animation.gif">
                <p class="text-center"><i>Animation of collision between Earth (blue) and Theia (black), forming 
                    the Moon (red and gray). Bodies are not to scale.</i></p>
            </div>

            <p class="text-justify">The most common and the most accepted idea of how the moon was formed is the Giant-impact Hypothesis, also
                called as Big Splash or the Theia Impact. According to this hypothesis, the Moon formed from the ejecta 
                of a collision between the proto-Earth and a Mars-sized planet, approximately 4.5 billion years ago, 
                in the Hadean eon (about 20 to 100 million years after the Solar System coalesced).
            </p>
            
            <p class="text-justify">Initially, the hypothesis supposed that Theia had struck Earth with a 
                glancing blow and ejected many pieces of both the proto-Earth and Theia, those pieces either 
                forming one body that became the Moon or forming two moons that eventually merged to form the Moon. 
                Such accounts assumed that a head-on impact would have destroyed both planets, creating a short-lived
                second asteroid belt between the orbits of Venus and Mars.
            </p>
            <p class="text-justify">
                In contrast, evidence published in January 2016 suggests that the impact was indeed a 
                head-on collision and that Theia's remains are on Earth and the Moon.
            </p>
            <br>
            <p>Below, you may see the evidences and counter evidences against the Giant Impact Hypothesis
                by clicking the buttons.
            </p>
        </div>
        <div class="theia-arg card p-3 container card mb-5 p-3 border-info rounded-0 bg-black border border-3 w-75" data-aos="fade-right">
            <div class="row">
                <div class="col-lg-3 justify-content-center">
                    <button id="theia-arg-pros" class="btn btn-outline-info rounded-0 mb-3 mt-3 ms-3">Pros - Evidences</button>
                    <button id="theia-arg-cons" class="btn btn-outline-info rounded-0 mb-3 mt-3 ms-3">Cons - Counter Evidence</button>
                </div>
                <div class="theia-arg-container col-lg-9">
                    <h1 id="theia-arg-title" class="text-end"></h1>
                    <p id="theia-first-arg" class="text-end"></p>
                    <p id="theia-sec-arg" class="text-end"></p>
                    <p id="theia-third-arg" class="text-end"></p>
                    <p id="theia-fourth-arg" class="text-end"></p>
                    <p id="theia-fifth-arg" class="text-end"></p>
                    <p id="theia-sixth-arg" class="text-end"></p>
                    <p id="theia-seventh-arg" class="text-end"></p>
                    <p id="theia-eighth-arg" class="text-end"></p>
                </div>
            </div>
        </div>
    </div>
    <!--Phases of the Moon-->
    <section class="moonPhases bg-black" id="moonPhases">
        <div class="container-fluid phases-of-moon text-light w-75">
            <div class="container">
                <div class="moon-anim-cont d-flex justify-content-center pt-5">
                    <img src="../img/moon-animation.gif">
                </div>
                <h1 class="text-center pt-4 display-3">Phases of the Moon</h1>
                <p class="text-justify">Half of the Moon's surface is always illuminated by sunlight. As the Moon orbits Earth, 
                    it changes how much of the lit-up side we can see. The eight Moon phases of a lunar month are divided 
                    into four primary and four intermediate (waxing and waning) Moon phases:
                </p>
            </div>
            <div class="theia-arg card p-3 container text-dark mt-5 border-info rounded-0 bg-black border border-3" data-aos="fade-left">
                <div class="row">
                    <div class="col-lg-3 justify-content-center">
                        <button id="new-moon-btn" class="btn btn-outline-info rounded-0 mb-3">New Moon</button>
                        <button id="waxing-crescent-btn" class="btn btn-outline-info rounded-0 mb-3">Waxing Crescent</button>
                        <button id="first-quarter-btn" class="btn btn-outline-info rounded-0 mb-3">First Quarter</button>
                        <button id="waxing-gibbous-btn" class="btn btn-outline-info rounded-0 mb-3">Waxing Gibbous</button>
                        <button id="full-moon-btn" class="btn btn-outline-info rounded-0 mb-3">Full Moon</button>
                        <button id="waning-gibbous-btn" class="btn btn-outline-info rounded-0 mb-3">Waning Gibbous</button>
                        <button id="last-quarter-btn" class="btn btn-outline-info rounded-0 mb-3">Last Quarter</button>
                        <button id="waning-crescent-btn" class="btn btn-outline-info rounded-0 mb-3">Waning Crescent</button>
                    </div>
                    <div class="moon-phase-container col-lg-9">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 id="moon-phase-title" class="text-light text-end"></h1>
                                <p id="moon-phase-illumination" class="text-light text-end"></p>
                                <p id="moon-phase-position" class="text-light text-end"></p>
                                <br>
                                <p id="moon-phase-descr1" class="text-light text-end"></p>
                                <p id="moon-phase-descr2" class="text-light text-end"></p>
                                <p id="moon-phase-type" class="text-light text-end"></p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <img id="moon-phase-img"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moon-api-container text-light py-5">
            <div class="container w-75">
                <h1>Current Moon Phase</h1>
                <p>Do you want to know the current phase of the Moon?</p>
                <div class="d-block">
                    <input id="moon-api-place-input" class="rounded-0 bg-dark border-info p-1 me-2 text-light" placeholder="Enter your Place">
                    <input id="moon-api-country-input" class="rounded-0 bg-dark border-info p-1 me-2 text-light" placeholder="Enter your Country">
                    <button id="moon-api-loc-btn" class="btn btn-outline-info rounded-0">Show current Moon Phase</button>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">
                            <img id="moon-phase-img-api">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h1 id="moon-phase-api"></h1>
                        <p id="moon-phase-desc-api"></p>
                        <br>
                        <p id="extra-info-moon-api"></p>
                        <p id="address-moon"></p>
                        <p id="address-info-moon"></p>
                        <p id="sunrise-moon"></p>
                        <p id="sunset-moon"></p>
                        <p id="cloud-cover-moon"></p>
                        <p id="weather-condition-moon"></p>
                        <h3 id="next-phase"></h3>
                        <p id="next-phase-date"></p>
                    </div>
                </div>
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
                            <button type="submit" class="btn btn-outline-info rounded-0" name="subscribeMoon">Subscribe</button>
                            
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
    <script src="../js/MoonExploration.js"></script>
</body>
</html>