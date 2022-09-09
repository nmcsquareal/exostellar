// Moon - Physical, Orbital and Atmospheric Characteristics

const charTitleCard = document.getElementById('char-title-card')
const firstCharCard = document.getElementById('first-char-card')
const secCharCard = document.getElementById('sec-char-card')
const thirdCharCard = document.getElementById('third-char-card')
const fourthCharCard = document.getElementById('fourth-char-card')
const fifthCharCard = document.getElementById('fifth-char-card')
const sixthCharCard = document.getElementById('sixth-char-card')
const seventhCharCard = document.getElementById('seventh-char-card')
const eighthCharCard = document.getElementById('eighth-char-card')
const ninthCharCard = document.getElementById('ninth-char-card')
const tenthCharCard = document.getElementById('tenth-char-card')

const physicalCharBtn = document.getElementById('physical-char-btn')
const orbitalCharBtn = document.getElementById('orbital-char-btn')
const atmosCharBtn = document.getElementById('atmos-char-btn')

physicalCharBtn.addEventListener('click', function(){
    charTitleCard.innerHTML = 'Physical Characteristics'
    firstCharCard.innerHTML = "Mean Radius: 1,737.4 km (0.2727 of Earth's)"
    secCharCard.innerHTML = "Equatorial Radius: 1,738.1 km (0.2725 of Earth's)"
    thirdCharCard.innerHTML = "Polar Radius: 1,736.0 km (0.2731 of Earth's)"
    fourthCharCard.innerHTML = 'Circumference (equatorial): 10, 921 km'
    fifthCharCard.innerHTML = "Surface Area: 3.793x10<sup>7</sup> km <sup>2</sup> (0.074 of Earth's)"
    sixthCharCard.innerHTML = "Volume: 2.1958x10<sup>10</sup> km<sup>3</sup> (0.02 of Earth's)"
    seventhCharCard.innerHTML = 'Surface Gravity: 1.622 m/s<sup>2</sup>'
    eighthCharCard.innerHTML = 'Escape Velocity: 2.38 km/s'
    ninthCharCard.innerHTML = 'Axial tilt: 1.5424&#176'
    tenthCharCard.innerHTML = 'Albedo: 0.136'
})

orbitalCharBtn.addEventListener('click', function(){
    charTitleCard.innerHTML = 'Orbital Characteristics'
    firstCharCard.innerHTML = 'Perigee: 362,600 km'
    secCharCard.innerHTML = 'Apogee: 405, 400 km'
    thirdCharCard.innerHTML = 'Semi-major axis: 384,399 km'
    fourthCharCard.innerHTML = 'Eccentricity: 0.0549'
    fifthCharCard.innerHTML = 'Orbital Period (sidereal): 27.321 d'
    sixthCharCard.innerHTML = 'Orbital Period (synodic): 29.530 d'
    seventhCharCard.innerHTML = 'Average Orbital Speed: 1.022 km/s'
    eighthCharCard.innerHTML = 'Inclination: 5.145&#176'
    ninthCharCard.innerHTML = ''
    tenthCharCard.innerHTML = ''
})

atmosCharBtn.addEventListener('click', function(){
    charTitleCard.innerHTML = 'Atmosphereric Characteristics'
    firstCharCard.innerHTML = 'Min Surface Temp: 100 K'
    secCharCard.innerHTML = 'Mean Surface Temp: 150 - 250 K'
    thirdCharCard.innerHTML = 'Max Surface Temp: 390 K'
    fourthCharCard.innerHTML = 'Surface Pressure (day): 10<sup>-7</sup> Pa'
    fifthCharCard.innerHTML = 'Surface Pressure (night): 10<sup>-10</sup> Pa'
    sixthCharCard.innerHTML = 'Surface absorbed dose rate: 13.2 μGy/h'
    seventhCharCard.innerHTML = 'Surface equivalent dose rate: 57.0 μSv/h'
    eighthCharCard.innerHTML = ''
    ninthCharCard.innerHTML = ''
    tenthCharCard.innerHTML = ''
})

// Giant Impact Hyppothesis - Theia

const theiaArgTitle = document.getElementById('theia-arg-title')
const theiaFirstArg = document.getElementById('theia-first-arg')
const theiaSecArg = document.getElementById('theia-sec-arg')
const theiaThirdArg = document.getElementById('theia-third-arg')
const theiaFourthArg = document.getElementById('theia-fourth-arg')
const theiaFifthArg = document.getElementById('theia-fifth-arg')
const theiaSixthArg = document.getElementById('theia-sixth-arg')
const theiaSeventhArg = document.getElementById('theia-seventh-arg')
const theiaEightArg = document.getElementById('theia-eighth-arg')

const theiaArgPros = document.getElementById('theia-arg-pros')
const theiaArgCons = document.getElementById('theia-arg-cons')

theiaArgPros.addEventListener('click', function(){
    theiaArgTitle.innerHTML = 'Evidences Supporting Giant Impact Hypothesis'
    theiaFirstArg.innerHTML = "1. Earth's spin and the Moon's orbit have similar orientations."
    theiaSecArg.innerHTML = `2. The Earth-Moon system contains an anomalously high angular momentum. 
    Meaning, the momentum contained in Earth's rotation, the Moon's rotation, and the Moon revolving 
    around Earth is significantly higher than the other terrestrial planets. A giant impact might have 
    supplied this excess momentum.`
    theiaThirdArg.innerHTML = `3. Moon samples indicate that the Moon was once molten down to a 
    substantial, but unknown, depth. This might have required more energy than predicted to be 
    available from the accretion of a body of the Moon's size. An extremely energetic process, such as 
    a giant impact, could provide this energy.`
    theiaFourthArg.innerHTML = `4. The Moon has a relatively small iron core. This gives the Moon a lower 
    density than Earth. Computer models of a giant impact of a Mars-sized body with Earth indicate the 
    impactor's core would likely penetrate Earth and fuse with its own core. This would leave the Moon 
    with less metallic iron than other planetary bodies.`
    theiaFifthArg.innerHTML = `5. The Moon is depleted in volatile elements compared to Earth. 
    Vaporizing at comparably lower temperatures, they could be lost in a high-energy event, 
    with the Moon's smaller gravity unable to recapture them while Earth did.`
    theiaSixthArg.innerHTML = "6. There is evidence in other star systems of similar collisions, resulting in debris discs."
    theiaSeventhArg.innerHTML = "7. Giant collisions are consistent with the leading theory of the formation of the Solar System."
    theiaEightArg.innerHTML = "8. The stable-isotope ratios of lunar and terrestrial rock are identical, implying a common origin."
})

theiaArgCons.addEventListener('click', function(){
    theiaArgTitle.innerHTML = `Counter Evidences against Giant Impact Hypothesis`
    theiaFirstArg.innerHTML = `1. The energy of such a giant impact is predicted to have heated Earth 
    to produce a global magma ocean, and evidence of the resultant planetary differentiation of the heavier 
    material sinking into Earth's mantle has been documented.`
    theiaSecArg.innerHTML = `2. There is no self-consistent model that starts with the giant-impact event and follows the evolution of the debris into a single moon.`
    theiaThirdArg.innerHTML = `3. Other remaining questions include when the Moon lost its share of volatile elements and 
    why Venus - which experienced giant impacts during its formation - does not host a similar moon.`
    theiaFourthArg.innerHTML = ''
    theiaFifthArg.innerHTML = ''
    theiaSixthArg.innerHTML = ''
    theiaSeventhArg.innerHTML = ''
    theiaEightArg.innerHTML = ''
})

// Moon Phases

const newMoonBtn = document.getElementById('new-moon-btn')
const waxingCrescentBtn = document.getElementById('waxing-crescent-btn')
const firstQuarterBtn = document.getElementById('first-quarter-btn')
const waxingGibbousBtn = document.getElementById('waxing-gibbous-btn')
const fullMoonBtn = document.getElementById('full-moon-btn')
const waningGibbousBtn = document.getElementById('waning-gibbous-btn')
const lastQuarterBtn = document.getElementById('last-quarter-btn')
const waningCrescentBtn = document.getElementById('waning-crescent-btn')

const moonPhaseTitle = document.getElementById('moon-phase-title')
const moonPhaseIllumination = document.getElementById('moon-phase-illumination')
const moonPhasePosition = document.getElementById('moon-phase-position')
const moonPhaseDescr1 = document.getElementById('moon-phase-descr1')
const moonPhaseDescr2 = document.getElementById('moon-phase-descr2')


const moonPhaseImg = document.getElementById('moon-phase-img')

newMoonBtn.addEventListener('click', function(){
    moonPhaseTitle.innerHTML = 'New Moon'
    moonPhaseIllumination.innerHTML = "Illumination: 0%"
    moonPhasePosition.innerHTML = "Position: The Moon is between the Sun and Earth"
    moonPhaseDescr1.innerHTML = "New moons are very difficult to see because a new moon is always closest to the sun."
    moonPhaseDescr2.innerHTML = `In other words, the sun isn't shining on the moon from Earth's perspective.
    That's what makes it so hard to see a new moon.`
    moonPhaseImg.src = "../img/new-moon.jpg"
})

waxingCrescentBtn.addEventListener('click', function(){
    moonPhaseTitle.innerHTML = 'Waxing Crescent'
    moonPhaseIllumination.innerHTML = "Illumination: 0.1% to 49.9%"
    moonPhasePosition.innerHTML = "Position: Moving from New Moon to First Quarter Moon"
    moonPhaseDescr1.innerHTML = `Because the moon orbits the Earth, it moves a bit to the east after a couple of days.
    Now, we can see the moon at a slight angle with only a partial bit of it lit up.`
    moonPhaseDescr2.innerHTML = `At this point, the crescent is still very thin.`
    moonPhaseImg.src = "../img/waxing-crescent-moon.jpg"
})

firstQuarterBtn.addEventListener('click', function(){
    moonPhaseTitle.innerHTML = 'First Quarter (Half Moon)'
    moonPhaseIllumination.innerHTML = "Illumination: 50%"
    moonPhasePosition.innerHTML = "Position: The Moon has gone one quarter of the way around Earth"
    moonPhaseDescr1.innerHTML = `When you see half of the dark and light side, then this means the moon is half full.
    The moon is orbiting and the waxing crescent moon is growing into a first quarter moon.`
    moonPhaseDescr2.innerHTML = `During a first-quarter moon, the moon is farther away from the sun and it's 
    easier to see. This is the first time that the day-night line on the moon is halfway lit up.`
    moonPhaseImg.src = "../img/first-quarter-moon.jpg"
})

waxingGibbousBtn.addEventListener('click', function(){
    moonPhaseTitle.innerHTML = 'Waxing Gibbous Moon'
    moonPhaseIllumination.innerHTML = "Illumination: 50.1% to 99.9%"
    moonPhasePosition.innerHTML = "Position: Moving from First Quarter to Full Moon"
    moonPhaseDescr1.innerHTML = `As it grows a bit more, it becomes a waxing gibbous moon.
    And gibbous simply means “convex” - that it's more than half of a circle but less than a full circle.`
    moonPhaseDescr2.innerHTML = `In this phase, we are very close to the moon being fully lit up by the sun.
    As the moon orbits the Earth more so, it finally approaches a full moon.`
    moonPhaseImg.src = "../img/waxing-gibbous-moon.jpg"
})

fullMoonBtn.addEventListener('click', function(){
    moonPhaseTitle.innerHTML = 'Full Moon'
    moonPhaseIllumination.innerHTML = "Illumination: 100%"
    moonPhasePosition.innerHTML = "Position: The Moon and the Sun are on opposite sides of Earth"
    moonPhaseDescr1.innerHTML = `A full moon is fully lit up from the perspective of the Earth.
    When the moon is on the opposite side of the Earth, the sun illuminates in its full.`
    moonPhaseDescr2.innerHTML = `At this point, the moon has moved half-way through its orbit at 180 degrees.`
    moonPhaseImg.src = "../img/full-moon.jpg"
})

waningGibbousBtn.addEventListener('click', function(){
    moonPhaseTitle.innerHTML = 'Waning Gibbous Moon'
    moonPhaseIllumination.innerHTML = "Illumination: 99.9% to 49.9%"
    moonPhasePosition.innerHTML = "Position: Moving from Full Moon to Third Quarter Moon"
    moonPhaseDescr1.innerHTML = `At this point, the moon is starting to orbit past 180 degrees into a waning gibbous moon.
    we will cycle through the first 4 phases of the moon. Instead this time, it will be in reverse order.`
    moonPhaseDescr2.innerHTML = `The waning gibbous moon means that its illuminated side is starting to shrink from a full moon.`
    moonPhaseImg.src = "../img/waning-gibbous-moon.jpg"
})

lastQuarterBtn.addEventListener('click', function(){
    moonPhaseTitle.innerHTML = 'Last Quarter Moon (Third Quarter)'
    moonPhaseIllumination.innerHTML = "Illumination: 50%"
    moonPhasePosition.innerHTML = "Position:  The Moon has gone three quarters of the way on its orbit around Earth"
    moonPhaseDescr1.innerHTML = `Once again, we are at a point where the moon appears to split in half as a last quarter moon.
    At this phase of the moon, it has cycled through 3/4 of its life. But it has reversed which side is lit by the sun.`
    moonPhaseDescr2.innerHTML = `And instead of it progressively appearing fuller, we begin to see less of the moon.`
    moonPhaseImg.src = "../img/third-quarter-moon.jpg"
})

waningCrescentBtn.addEventListener('click', function(){
    moonPhaseTitle.innerHTML = 'Waning Crescent'
    moonPhaseIllumination.innerHTML = "Illumination: 49.9% to 0.1%"
    moonPhasePosition.innerHTML = "Position:  Moving from Third Quarter to New Moon"
    moonPhaseDescr1.innerHTML = `A couple of days after, you get a waning crescent moon.
    We start to see less and less of the moon as the moon orbits past the 270° cycle.`
    moonPhaseDescr2.innerHTML = `When the moon has completed its full 360° orbit around the Earth, we are back to the first phase.`
    moonPhaseImg.src = "../img/waning-crescent-moon.jpg"
})

const moonAPIlocBtn = document.getElementById('moon-api-loc-btn')
const moonAPIplaceInput = document.getElementById('moon-api-place-input')
const moonAPIcountryInput = document.getElementById('moon-api-country-input')

const moonPhaseAPI = document.getElementById('moon-phase-api')
const moonPhaseImgAPI = document.getElementById('moon-phase-img-api')
const moonPhaseDescrAPI = document.getElementById('moon-phase-desc-api')

const extraInfoMoonAPI = document.getElementById('extra-info-moon-api')
const addressMoon = document.getElementById('address-moon')
const addressInfoMoon = document.getElementById('address-info-moon')
const sunRiseMoon = document.getElementById('sunrise-moon')
const sunSetMoon = document.getElementById('sunset-moon')
const cloudCoverMoon = document.getElementById('cloud-cover-moon')
const weatherConditionMoon = document.getElementById('weather-condition-moon')

const hourTodayMoon = document.getElementById('hour-today-moon')
const hourTodayMoonBtn = document.getElementById('hour-today-moon-btn')


moonAPIlocBtn.addEventListener('click', async function(){
    const response = await fetch(`https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/${moonAPIplaceInput.value}%20${moonAPIcountryInput.value}?unitGroup=metric&elements=address%2Cprecipprob%2Ccloudcover%2Csolarradiation%2Cuvindex%2Csunrise%2Csunset%2Cmoonphase%2Cconditions%2Cdescription%2Cicon&key=S64CX8KP8Q7TWM2KGKV4X7PFP&contentType=json`);
	const data = await response.json();

    if(data.currentConditions.moonphase === 0){
        moonPhaseAPI.innerHTML = "Moon Phase: New Moon"
        moonPhaseImgAPI.src = "../img/new-moon.jpg"
        moonPhaseDescrAPI.innerHTML = "The moon has 0% Illumination."
    } 
    else if(data.currentConditions.moonphase < 0.25){
        moonPhaseAPI.innerHTML = "Moon Phase: Waxing Crescent"
        moonPhaseImgAPI.src = "../img/waxing-crescent-moon.jpg"
        moonPhaseDescrAPI.innerHTML = "The moon has 0.1% to 49.9% Illumination."
    }
    else if(data.currentConditions.moonphase === 0.25){
        moonPhaseAPI.innerHTML = "Moon Phase: First Quarter (Half Moon)"
        moonPhaseImgAPI.src = "../img/first-quarter-moon.jpg"
        moonPhaseDescrAPI.innerHTML = "The moon has 50% Illumination."
    }
    else if(data.currentConditions.moonphase < 0.5){
        moonPhaseAPI.innerHTML = "Moon Phase: Waxing Gibbous"
        moonPhaseImgAPI.src = "../img/waxing-gibbous-moon.jpg"
        moonPhaseDescrAPI.innerHTML = "The moon has 50% to 99.9% Illumination."
    }
    else if(data.currentConditions.moonphase === 0.5){
        moonPhaseAPI.innerHTML = "Moon Phase: Full Moon"
        moonPhaseImgAPI.src = "../img/full-moon.jpg"
        moonPhaseDescrAPI.innerHTML = "The moon has 100% Illumination."
    }
    else if(data.currentConditions.moonphase <= 0.75){
        moonPhaseAPI.innerHTML = "Moon Phase: Waning Gibbous"
        moonPhaseImgAPI.src = "../img/waning-gibbous-moon.jpg"
        moonPhaseDescrAPI.innerHTML = "The moon has less than 100% Illumination (up to 50.1%)."
    }
    else if(data.currentConditions.moonphase === 0.75){
        moonPhaseAPI.innerHTML = "Moon Phase: Last Quarter (Third Quarter)"
        moonPhaseImgAPI.src = "../img/third-quarter-moon.jpg"
        moonPhaseDescrAPI.innerHTML = "The moon has 50% Illumination."
    }
    else if(data.currentConditions.moonphase <= 1){
        moonPhaseAPI.innerHTML = "Moon Phase: Waning Crescent"
        moonPhaseImgAPI.src = "../img/waning-crescent-moon.jpg"
        moonPhaseDescrAPI.innerHTML = "The moon has less than 50% Illumination but not 0."
    }

    extraInfoMoonAPI.innerHTML = "Extra Info for Moon Sightings:"
    addressMoon.innerHTML = "Address: " + data.resolvedAddress
    addressInfoMoon.innerHTML = `Address Info: (Lat, Long) = (${data.latitude}, ${data.longitude})`
    sunRiseMoon.innerHTML = "Sunrise: " + data.currentConditions.sunrise 
    sunSetMoon.innerHTML = "Sunset: " + data.currentConditions.sunset 
    cloudCoverMoon.innerHTML = "Cloud Cover: " + data.currentConditions.cloudcover 
    weatherConditionMoon.innerHTML = "Weather Condition: " + data.currentConditions.conditions 

    console.log(data)
})