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


    <title>Space Exploration</title>
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
                                    <li><a class="dropdown-item" href="SpaceExploration.php">SPACE
                                            EXPLORATION</a></li>

                                    <li><a class="dropdown-item" href="../pages/MoonExploration.php">MOON
                                            EXPLORATION</a>
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
        <h1 class="page-title display-1 mt-3 text-light text-center glow">Space Exploration</h1>
        <h2 class="page-subtitle text-light text-center text-stroke">Discover Space with us</h2>

        <div class="container card-group text-center mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">

                    <div class="content-container card bg-black text-info rounded-0 border-info border border-3">
                        <a href="#spaceExploration" class="noUnderline">
                            <img class="card-img-top" src="../img/space-exploration.webp">
                            <p class="card-text mt-2 p-1 fs-4">Brief History of Space Exploration</p>
                        </a>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">
                    <div class="content-container card bg-black text-info rounded-0 border-info border border-3">
                        <a href="#internationalSpaceStation" class="noUnderline">
                            <img class="card-img-top" src="../img/iss.webp">
                            <p class="card-text mt-2 p-1 fs-4">Spot the Station : International Space Station Locator
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">
                    <div class="content-container card bg-black text-info rounded-0 border-info border border-3">
                        <a href="#nearEarthObjects" class="noUnderline">
                            <img class="card-img-top" src="../img/neo.jpg">
                            <p class="card-text mt-2 p-1 fs-4">Near Earth Objects : Earth Close Approaches</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">
                    <div class="content-container card bg-black text-info rounded-0 border-info border border-3">
                        <a href="#marsExploration" class="noUnderline">
                            <img class="card-img-top" src="../img/mars.jpg">
                            <p class="card-text mt-2 p-1 fs-4">Mars Exploration : Exploring the Red planet</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Space Exploration (Brief History)-->
    <section class="spaceExploration" id="spaceExploration">
        <div class="container-fluid bg-black text-light">
            <h1 class="display-4 text-center text-stroke p-5">
                Brief History of Space Exploration
            </h1>
            <div class="space-exploration-container">
                <div class="timeline">
                    <ul>
                        <li>
                            <div class="timeline-content">
                                <h1 class="text-decoration-underline">Space Race</h1>
                                <p class="fs-5">The early era of space exploration was driven by a "Space Race" between
                                    the
                                    Soviet Union
                                    and the United States. The launch of the first human-made object to orbit Earth,
                                    the Soviet Union's Sputnik 1, and the first Moon landing by
                                    the American Apollo 11 are often taken as landmarks for
                                    this initial period.</p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-content">
                                <h1 class="text-decoration-underline">Interplanetary Space Exploration</h1>
                                <p class="fs-5">Interplanetary space explorations were made possible starting with
                                    Venera 1
                                    and Mariner 2
                                    flyby. The Pioneer and Voyager projects made it possible to study the Sun up to the
                                    outer planets.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-content">
                                <h1 class="text-decoration-underline">Competition to Cooperation</h1>
                                <p class="fs-5">After the first 20 years of exploration, focus shifted from one-off
                                    flights
                                    to
                                    renewable hardware, such as the Space Shuttle program, and from competition to
                                    cooperation as with the International Space Station (ISS).</p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-content">
                                <h1 class="text-decoration-underline">Going beyond</h1>
                                <p class="fs-5">Voyager 1 became the first human-made object to leave the Solar System
                                    into
                                    interstellar
                                    space on 25 August 2012. It is the most distant human-made object from Earth.
                                    Astronomy
                                    are still open for future space explorations. Current plans are the Artemis program
                                    and Human mission to Mars.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid w-75">
                <div class="row d-flex align-items-center justify-content-center  pt-3">
                    <div class="col-lg-6">
                        <video class="history-video my-auto w-100" controls>
                            <source src="../vid/history-space-exploration.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <h1 class="py-3" >Space Exploration: The Age of Hubble</h1>
                        <p class="text-justify">This visual feast of a documentary brings the most cutting-edge findings
                            of
                            modern astronomy to life with state-of-the-art animation, informed by supercomputer
                            simulations of cosmic events. Marvel at the formation of a super-massive black hole
                            350 million lightyears away; admire the stunning beauty of the Orion nebula; and discover
                            what the stars tell us about our place in the stretch of time and space.
                        </p>
                        <p class="text-justify">The Age of Hubble is gripping, high-end space programming at its best
                            and
                            essential
                            viewing for space enthusiasts of all ages.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--International Space Station-->
    <section class="internationalSpaceStation" id="internationalSpaceStation">
        <div class="iss bg-black text-info py-5">

            <h1 class="display-4 text-center">
                The International Space Station
            </h1>
            <div class="iss-container w-75 mx-auto mt-5">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="../img/iss2.webp" class="w-100">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-justify">
                            The International Space Station (ISS) is the largest modular space station
                            currently in low Earth orbit. It is a multinational collaborative project involving
                            five participating space agencies: NASA (United States), Roscosmos (Russia), JAXA (Japan),
                            ESA (Europe), and CSA (Canada).
                        </p>
                        <p class="text-justify">
                            The station serves as a microgravity and space environment research laboratory in which
                            scientific research is conducted in astrobiology, astronomy, meteorology, physics, and other
                            fields.
                            The ISS is suited for testing the spacecraft systems and equipment required for possible
                            future
                            long-duration missions to the Moon and Mars.
                        </p>
                    </div>

                    <h3 class="display-6 mt-5">Scientific Purposes</h3>
                    <p class="mt-3 text-justify">Scientific research in ISS is conducted in a wide variety of fields,
                        including
                        astrobiology, astronomy, physical sciences, materials science, space weather,
                        meteorology, and human research including space medicine and the life sciences. Below
                        are some of the important goals and achievements of the International Space Station.
                    </p>
                    <div class="iss-purposes container card-group text-center mt-2 text-light">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">
                                <div class="content-container card  border-info rounded-0 bg-dark border border-3">
                                    <img class="card-img-top mh-50 rounded-0" src="../img/iss-boneloss.jpg">
                                    <p class="card-text p-3">Scientists have been studying the effect of
                                        long-term space exposure on the human body, such as muscle atrophy, boneloss
                                        and fluid shift.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">
                                <div class="content-container card border-info rounded-0 bg-dark border border-3">
                                    <img class="card-img-top mh-50 rounded-0" src="../img/iss-bacteria.jpg">
                                    <p class="card-text p-3 bg-dark">Deinococcus radiodurans, a bacteria that is highly
                                        resistant to environmental hazards. These were found to survive in outer space
                                        by the ISS.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">
                                <div class="content-container card border-info rounded-0 bg-dark border border-3">
                                    <img class="card-img-top rounded-0" src="../img/iss-dark-matter.jpg">
                                    <p class="card-text p-3 bg-dark">The Alpha Magnetic Spertrometer (AMS) is intended
                                        to
                                        detect dark matter and answer other fundamental questions about our universe</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mt-4 d-flex justify-content-center">
                                <div class="content-container card border-info rounded-0 bg-dark border border-3">
                                    <img class="card-img-top rounded-0" src="../img/iss-remote-sensing.jpg">
                                    <p class="card-text p-3 bg-dark">
                                        ISS have dramatically improved remote sensing of our planet. It has examined
                                        aerosols
                                        and ozones,
                                        as well as cosmic rays and antimatter.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--ISS Locator-->
                <h3 class="display-6 pt-3 mt-5">International Space Station Locator</h3>
                <div
                    class="trivia-card bg-dark card my-4 float-end d-inline mx-5 rounded-0 border-info border border-5 w-50" data-aos="flip-down">
                    <h4 class="p-1 text-center">Did you know?</h4>
                    <p class="px-3 text-center text-light">If you're going to include man-made objects, the
                        International
                        Space Station
                        is
                        the third brightest object in the sky, behind the sun and moon.
                    </p>
                </div>

                <p class="mt-4 mx-3 text-justify">Many people, especially astronomers, enjoy having a glimpse on
                    astronomical objects and events. Some enjoys
                    looking at the stars to see patterns in constellations. Others love to wait and have a short glimpse
                    on
                    eclipses.
                    But one of the most underrated is to look for the International Space Station. It is a man-made
                    object
                    that orbits the
                    Earth for the puspose of scientifice research and space exploration.
                </p>

                <p class="mt-4 mx-3 text-justify">If the sky is clear, you can actually see the International Space
                    Station
                    as it moves above you! To spot the ISS, look for a bright, white spot of light moving quickly across
                    the
                    sky.
                    You can see the ISS with just your naked eye. In fact, a telescope is pretty
                    useless for ISS-spotting because the ISS moves so quickly it's very hard to keep it in a
                    telescope's high magnification eyepiece.
                </p>

                <p class="mt-4 mx-3 text-justify">
                    In this section, we will show you the path that the ISS takes around the world.
                </p>

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="map-iss"></div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left">
                            <p id="lat" class="par"></p>
                            <p id="lon" class="par"></p>
                            <p id="alt" class="par"></p>
                            <p id="velo" class="par"></p>
                            <p id="vis" class="par"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Near Earth Objects -->
    <div class="bg-dark py-5" id="nearEarthObjects">
        <div class="container w-75 bg-dark text-info">
            <h1 class="display-4 text-center text-stroke p-4">Near Earth Objects</h1>
            <p class="text-justify">A near-Earth object (NEO) is any small Solar System body whose orbit brings it into
                proximity with Earth. By convention, a Solar System body is a NEO if its closest approach
                to the Sun (perihelion) is less than 1.3 astronomical units (AU). If a NEO's orbit
                crosses the Earth's orbit, and the object is larger than 140 meters (460 ft) across,
                it is considered a potentially hazardous object (PHO). Most known PHOs and NEOs are
                asteroids, but a small fraction are comets.</p>
            <div class="d-flex justify-content-center">
                <img src="../img/neo.gif" class="neo-gif my-5 w-75">
            </div>
            <h3 class="display-6 pt-3 mt-5" data-aos="fade-left">Scientific Interest</h3>
            <div class="container" data-aos="fade-left">
                <div class="row mt-4">
                    <div class="col-sm-2 d-flex align-items-center justify-content-end">
                        <i class="fa-solid fa-meteor float-end icon-goal-curiosity"></i>
                    </div>
                    <div class="col-sm-10">
                        <h3>Potentially Hazardous Object (PHO)</h3>
                        <p>A potentially hazardous object (PHO) is a near-Earth object - either an
                            asteroid or a comet - with an orbit that can make close approaches
                            to the Earth and is large enough to cause significant regional damage
                            in the event of impact. Scientists are constantly monitoring these objects as
                            their orbits should be well determined.
                        </p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-2 d-flex align-items-center justify-content-end">
                        <i class="fa-solid fa-flask float-end icon-goal-curiosity"></i>
                    </div>
                    <div class="col-sm-10">
                        <h3>Scientific Studies</h3>
                        <p>As the primitive, leftover building blocks of the solar system formation
                            process, comets and asteroids offer clues to the chemical mixture from
                            which the planets formed some 4.6 billion years ago. If we wish to know
                            the composition of the primordial mixture from which the planets formed,
                            then we must determine the chemical constituents of the leftover debris
                            from this formation process - the comets and asteroids.
                        </p>
                    </div>
                </div>
                <p class="mt-4">Below is a generator of Near Earth Asteroids named. You may search using the
                    <i>"Search"</i>
                    button
                    or generate randomly using <i>"Search Random"</i> button.
                </p>

                <div id="NEOcontainer" class="card bg-black text-info rounded-0 p-4 mb-5">
                    Search for Near Earth Asteroid <input id="input-search-near-asteroid" type="text"
                        class="w-75 bg-dark text-light border-info">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <button id="input-search-near-asteroid-btn"
                                class="btn btn-outline-info rounded-0 me-2">Search</button>
                            <button id="CAD-btn-rand" class="btn btn-outline-info rounded-0">Search Random</button>
                        </div>
                        <div class="col-md-9 mt-3">
                            <p id="asteroidName"></p>
                            <p id="asteroidFullName"></p>
                            <p id="estMinDiameterKm"></p>
                            <p id="estMaxDiameterKm"></p>
                            <p id="absMagnitude"></p>
                            <p id="isPotentiallyHazardous"></p>
                            <p id="isSentryObject"></p>
                            <p id="firstObservationDate"></p>
                            <p id="lastObservationDate"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Mars Exploration-->
    <section class="marsExploration" id="marsExploration">
        <div class="mars-exploration bg-dark">
            <div class="container text-light w-75">
                <h1 class="display-4 text-center text-stroke">
                    Mars Exploration: Exploring the Red Planet
                </h1>
                <div class="row d-flex align-items-center justify-content-center ">
                    <div class="col-lg-6 text-center" data-aos="zoom-in">
                        <img class="martian-img w-100" src="../img/the-martian.jpg">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-justify p-5">
                            <i><span class="">The poster here came from a science fiction film called The Martian. The
                                    film
                                    depicts an
                                    astronaut's lone struggle to survive on Mars after being left behind by his
                                    crewmates.
                                    He survived even from being left there for 549 martian days. But unlike in the
                                    movie, we
                                    haven't really
                                    had a person in another planet.<blockquote> Question: "Can we ever set foot on mars?
                                        Will there be a day where
                                        we can live on the Red Planet?"</blockquote>
                            </i>
                        </p>

                    </div>
                </div>

                <h3 class="display-6 my-5">Mars Exploration Program</h3>
                <p class="text-justify">Mars Exploration Program (MEP) is a long-term effort to explore the planet
                    Mars, funded and led by NASA. Formed in 1993, MEP has made use of orbital
                    spacecraft, landers, and Mars rovers to explore the possibilities of life on
                    Mars, as well as the planet's climate and natural resources. Below are some of the achievements
                    made by the Mars Exploration Program.
                </p>
                <!--Mars Exploration - Brief History-->
                <div class="mars-history container text-center mt-2 text-dark">
                    <div class="row">
                        <div
                            class="mars-history-content col-lg-3 col-md-6 mt-5 bg-light d-flex flex-column justify-content-between bg-black text-white">
                            <div class="mars-history-text">
                                <h1 class="mt-3 display-3">01</h1>
                                <p>NASA Mariner 4 (1965) was the first successful flyby on the planet Mars. It sent
                                    21 photos of Mars to Earth. Years later, Mariner 9 (1971), sent thousands of photos
                                    and discovered volcanoes and canyon system.
                                </p>
                            </div>
                            <div class="mars-history-content-img mars-history-content-img-1">
                                <img src="../img/nasa-mariner-4.jpg" class="w-100 my-3">
                            </div>
                        </div>
                        <div
                            class="mars-history-content col-lg-3 col-md-6 mt-5 bg-light d-flex flex-column justify-content-between">
                            <div class="mars-history-text">
                                <h1 class="mt-3 display-3">02</h1>
                                <p>NASA's Viking 1 and Viking 2 (1976) both arrived and sent their landers to the
                                    surface.
                                    Each
                                    spacecraft returned years of data but cannot prove the existence of microorganisms
                                    on
                                    Mars.
                                </p>
                            </div>
                            <div class=" mars-history-content-img mars-history-content-img-2">
                                <img src="../img/vikings.jpg" class="w-100 my-3">
                            </div>
                        </div>
                        <div
                            class="mars-history-content col-lg-3 col-md-6 mt-5 bg-light d-flex flex-column justify-content-between bg-black text-white">
                            <div class="mars-history-text">
                                <h1 class="mt-3 display-3">03</h1>
                                <p>In the 2000s, NASA established the Mars Scout Program to send a series of small,
                                    low-cost
                                    robotic missions to Mars.
                                    The first robotic spacecraft in this program was Phoenix together with three other
                                    selected spacecrafts.
                                </p>
                            </div>
                            <div class="mars-history-content-img mars-history-content-img-3">
                                <img src="../img/phoenix.jpg" class="w-100 my-3">
                            </div>
                        </div>
                        <div
                            class="mars-history-content col-lg-3 col-md-6 mt-5 bg-light d-flex flex-column justify-content-between">
                            <div>
                                <h1 class="mt-3 display-3">04</h1>
                                <p>Beyond 2010s, different rovers were sent to Mars, hoping to get substantial
                                    information
                                    from them. Curiosity,
                                    Insight, Perseverance and Ingenuity was launched respectively.
                                </p>
                            </div>
                            <div class="mars-history-content-img mars-history-content-img-4">
                                <img src="../img/curiosity.jpg" class="w-100 my-3">
                            </div>
                        </div>
                    </div>
                </div>
                <!--Mars Curiosity Rover-->
                <div>
                    <h3 class="display-6 my-5">NASA Curiosity Rover</h3>
                    <p>Curiosity is a car-sized Mars rover designed to explore the Gale crater on
                        Mars as part of NASA's Mars Science Laboratory (MSL) mission. This is one of the
                        most important projects from Mars Exploration Program as it studies the Biological,
                        Geological and Geochemical, Planetary Processes and Surface Radiation aspects of the
                        planet Mars.
                    </p>
                    <!--Mars Curiosity Rover - Goals-->
                    <h2 class="text-center mt-5" data-aos="fade-right">Goals and Objectives</h2>
                    <div class="container" data-aos="fade-right">
                        <div class="row mt-4">
                            <div class="col-sm-2 d-flex align-items-center justify-content-end">
                                <i class="fa-solid fa-dna float-end icon-goal-curiosity"></i>
                            </div>
                            <div class="col-sm-10">
                                <h3>Biological</h3>
                                <ol>
                                    <li>Determine the nature and inventory of organic carbon compounds</li>
                                    <li>Investigate the chemical building blocks of life (carbon, hydrogen, nitrogen,
                                        oxygen, phosphorus, and sulfur)</li>
                                    <li>Identify features that may represent the effects of biological processes
                                        (biosignatures and biomolecules)</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-2 d-flex align-items-center justify-content-end">
                                <i class="fa-solid fa-volcano icon-goal-curiosity"></i>
                            </div>
                            <div class="col-sm-10">
                                <h3>Geological and Geochemical</h3>
                                <ol start="4">
                                    <li>Investigate the chemical, isotopic, and mineralogical composition of the Martian
                                        surface and near-surface geological materials</li>
                                    <li>Interpret the processes that have formed and modified rocks and soils</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-2 d-flex align-items-center justify-content-end">
                                <i class="fa-solid fa-earth-americas float-end icon-goal-curiosity"></i>
                            </div>
                            <div class="col-sm-10">
                                <h3>Planetary process</h3>
                                <ol start="6">
                                    <li>Assess long-timescale (i.e., 4-billion-year) Martian atmospheric evolution
                                        processes
                                    </li>
                                    <li>Determine present state, distribution, and cycling of water and carbon dioxide
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-2 d-flex align-items-center justify-content-end">
                                <i class="fa-solid fa-radiation float-end icon-goal-curiosity"></i>
                            </div>
                            <div class="col-sm-10">
                                <h3>Surface Radiation</h3>
                                <ol start="8">
                                    <li>Characterize the broad spectrum of surface radiation, including galactic and
                                        cosmic radiation, solar proton events and secondary neutrons. As part of its
                                        exploration, it also measured the radiation exposure in the interior of the
                                        spacecraft as it traveled to Mars, and it is continuing radiation measurements
                                        as it explores the surface of Mars. This data would be important for a future
                                        crewed mission.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="display-6 my-5">Cameras from NASA Curiosity Rover</h3>
                        <p>The Curiosity rover actually has 17 cameras on it, which is the most of any NASA planetary
                            mission ever. Thankfully, we have access to different images on five of these cameras
                            including
                            MAST Camera, Front Hazard Avoidance Camera (FHAZ), Rear Hazard Avoidance Camera (RHAZ),
                            Chemistry and Camera Tool (ChemCam) and Navigation Camera (NazCams).
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="text-center">MAST Camera</p>
                                <video height="300px" width="100%" controls>
                                    <source src="../vid/mast.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-lg-6">
                                <p class="text-center">Chemistry and Camera Tool (ChemCam)</p>
                                <video height="300px" width="100%" controls>
                                    <source src="../vid/chemcam.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <!--NASA Curiosity Images taken from NASA API-->
                        <div class="container text-center">
                            <h3 class="text-center mt-5 mb-4">Images taken by NASA Curiosity Rover</h3>
                            <i>Click on the buttons below to view images taken by the NASA Curiosity Rover </i>
                        </div>

                        <div class="row mt-4">
                            <div class="curiosity-img-btn-container col-md-3 d-flex flex-column align-items-center">
                                <button id="btn-img-MAST"
                                    class="curiosity-img-btn btn btn-outline-info rounded-0 my-2">MAST</button>
                                <button id="btn-img-FHAZ"
                                    class="curiosity-img-btn btn btn-outline-info rounded-0 my-2">FHAZ</button>
                                <button id="btn-img-RHAZ"
                                    class="curiosity-img-btn btn btn-outline-info rounded-0 my-2">RHAZ</button>
                                <button id="btn-img-ChemCam"
                                    class="curiosity-img-btn btn btn-outline-info rounded-0 my-2">ChemCam</button>
                                <button id="btn-img-NavCam"
                                    class="curiosity-img-btn btn btn-outline-info rounded-0 my-2">NavCam</button>
                            </div>
                            <div
                                class="col-md-8 bg-light d-flex flex-column justify-content-center align-items-center bg-black">
                                <img id="nasa-rover-photos" class="mt-4">
                                <p id="nasa-rover-descr" class="text-light"></p>
                            </div>
                        </div>
                    </div>
                    <!--NASA Curiosity REMS (Rover Environmental Monitoring Station)-->
                    <div class="pb-5">
                        <h3 class="text-center my-5">Rover Environmental Monitoring Station (REMS)</h3>
                        <div class="container">
                            <div class="row d-flex align-items-center justify-content-center ">
                                <div class="col-lg-6 text-center" >
                                    <img class="rems-img w-100" src="../img/rems.jpg">
                                </div>
                                <div class="col-lg-6" data-aos="fade-left">
                                    <p>The Rover Environmental Monitoring Station is nicknamed REMS,
                                        and it contains all the weather instruments needed to provide daily
                                        and seasonal reports on meteorological conditions around the rover.
                                        The main job of REMS is to act as a weather station to measure
                                        atmospheric pressure, temperature, humidity, winds, plus ultraviolet radiation
                                        levels.
                                    </p>

                                </div>
                            </div>

                            <!--NASA Curiosity REMS collected data from an API-->
                            <div class="row d-flex align-items-center justify-content-center ">
                                <div class="col-lg-6">
                                    <div class="text-justify p-5" data-aos="fade-right">
                                        <p>
                                            Thankfully, we have access to the current data from REMS thanks to NASA Mars
                                            API.
                                            Here are some of the data obtained by REMS while staying on Mars.
                                        </p>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="my-4 bg-black text-white card w-100 rounded-0 p-5" >
                                        <h3>Current Data:</h3>
                                        <p id="rems-data-date"></p>
                                        <p id="rems-data-season"></p>
                                        <p id="rems-data-mintemp"></p>
                                        <p id="rems-data-maxtemp"></p>
                                        <p id="rems-data-min-grnd-temp"></p>
                                        <p id="rems-data-max-grnd-temp"></p>
                                        <p id="rems-data-pressure"></p>
                                        <p id="rems-data-atmo-opacity"></p>
                                        <p id="rems-data-uv-irradiance"></p>
                                        <p id="rems-data-atmo-opacity"></p>
                                    </div>
                                </div>
                            </div>

                        </div>
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
                            <button type="submit" class="btn btn-outline-info rounded-0" name="subscribeExpl">Subscribe</button>
                            
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
    
    <script src="../js/sweetalert2@11.js"></script>
    <script src="../js/scrolltopbtn.js"></script>
    <script src="../js/SpaceExploration.js"></script>
</body>

</html>