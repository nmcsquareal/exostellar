// map, tiles and icon from Leaflet (Open Street Map)

const map = L.map('map-iss').setView([14.7011, 120.9830], 2);
const attribution = '&copy; <a href="https://www.openstreetmap.org/copyright" target="_blank"> OpenStreetMap</a> contributors - ISS Locator'; 

const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
const tiles = L.tileLayer(tileUrl,{attribution});
tiles.addTo(map);

const issIcon = L.icon({
	iconUrl: '../img/marker.png',
	iconSize: [60,60],
	iconAnchor: [25,16]
});

const myMarker = L.marker([0,0], {
	icon: issIcon
	}).addTo(map);

// Get ISS location (then link to Leflet Map)
const apiUrl = 'https://api.wheretheiss.at/v1/satellites/25544';

let firstTime = true;
async function getISS(){
	const response = await fetch (apiUrl);
	const data = await response.json();
	const {latitude, longitude, altitude, velocity, visibility} = data;

	myMarker.setLatLng([latitude, longitude]);

	if (firstTime) {
	map.setView([latitude, longitude], 2);
	firstTime = false;
	}
	
	document.getElementById('lat').innerHTML = `Latitude: ${latitude.toFixed(5)}`;
	document.getElementById('lon').innerHTML = `Longitude: ${longitude.toFixed(5)}`;
	document.getElementById('alt').innerHTML = `Altitude: ${altitude.toFixed(5)} km`;
	document.getElementById('velo').innerHTML = `Velocity: ${velocity.toFixed(5)} km/hr`;
	document.getElementById('vis').innerHTML = `Visibility: ${visibility}`;
}
getISS();
setInterval(getISS, 1000);

// NASA Rover Images + NASA Curiosity Atmospheric Data

const roverImg = document.getElementById('nasa-rover-photos'),
      roverDescr = document.getElementById('nasa-rover-descr');

const btnImgMAST = document.getElementById('btn-img-MAST'),
      btnImgFHAZ = document.getElementById('btn-img-FHAZ'),
      btnImgRHAZ = document.getElementById('btn-img-RHAZ'),
      btnImgChemCam = document.getElementById('btn-img-ChemCam'),
      btnImgNavCam = document.getElementById('btn-img-NavCam');

async function nasaMarsPhotos(){
	const response = await fetch('https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000&api_key=sumkusaoBh4850aFRXhjbO6bhMtIShu5w9da0yHo');
	const datos = await response.json();

	const imgSrcMAST = [],
	      imgSrcFHAZ = [],
	      imgSrcRHAZ = [],
	      imgSrcChemCam = [],
	      imgSrcNavCam = [];

	// Not important values but might be used later
	const curiosityLaunchDate = datos.photos[0].rover.launch_date; 
	const curiosityLandDate = datos.photos[0].rover.landing_date; 
	const curiosityStatus = datos.photos[0].rover.status; 

	for (let i = 0; i < datos.photos.length; i++){
		if (datos.photos[i].camera.name === "MAST"){
			imgSrcMAST.push(datos.photos[i].img_src)
		}
		else if (datos.photos[i].camera.name === "FHAZ"){
			imgSrcFHAZ.push(datos.photos[i].img_src)
		}
		else if (datos.photos[i].camera.name === "RHAZ"){
			imgSrcRHAZ.push(datos.photos[i].img_src)
		}
		else if (datos.photos[i].camera.name === "CHEMCAM"){
			imgSrcChemCam.push(datos.photos[i].img_src)
		}
		else if (datos.photos[i].camera.name === "NAVCAM"){
			imgSrcNavCam.push(datos.photos[i].img_src)
		}
	}

	btnImgMAST.addEventListener('click', function(){
		let randnum = Math.floor((Math.random()* imgSrcMAST.length))
		roverImg.src = imgSrcMAST[randnum]
		roverDescr.innerHTML = `Image taken by Curiosity Rover in Mars using the MAST Camera taken last May 30, 2015.`
	})

	let b = 0
	btnImgFHAZ.addEventListener('click', function(){
		if (b < imgSrcFHAZ.length){
			roverImg.src = imgSrcFHAZ[b]
			b = b + 1
		}
		else if(b >= imgSrcFHAZ.length){
			roverImg.src = imgSrcFHAZ[0]
			b = 0
		}
		roverDescr.innerHTML = `Image taken by Curiosity Rover in Mars using the 
		Front Hazard Avoidance Camera (FHAZ) taken last May 30, 2015.`
	})

	let c = 0
	btnImgRHAZ.addEventListener('click', function(){
		if (c < imgSrcRHAZ.length){
			roverImg.src = imgSrcRHAZ[c]
			c = c + 1
		}
		else if(c >= imgSrcRHAZ.length){
			roverImg.src = imgSrcRHAZ[0]
			c = 0
		}
		roverDescr.innerHTML = `Image taken by Curiosity Rover in Mars using the 
		Rear Hazard Avoidance Camera (RHAZ) taken last May 30, 2015.`
	})

	// I'll make ChemCam as Default

	let d = 0
	function btnImgChemCamFunc(){
		if (d < imgSrcChemCam.length){
			roverImg.src = imgSrcChemCam[d]
			d = d + 1
		}
		else if(d >= imgSrcChemCam.length){
			roverImg.src = imgSrcChemCam[0]
			d = 0
		}
		roverDescr.innerHTML = `Image taken by Curiosity Rover in Mars using the Chemistry and Camera Tool 
		(ChemCam) taken last May 30, 2015.`
	}

	btnImgChemCam.addEventListener('onload', btnImgChemCamFunc)
	btnImgChemCam.addEventListener('click', btnImgChemCamFunc)

	let e = 0
	btnImgNavCam.addEventListener('click', function(){
		if (e < imgSrcNavCam.length){
			roverImg.src = imgSrcNavCam[e]
			e = e + 1
		} 
		else if (e >= imgSrcNavCam.length){
			roverImg.src = imgSrcNavCam[0]
			e = 0
		}
		console.log(imgSrcNavCam.length)
		console.log("e: " + e)
		roverDescr.innerHTML = `Image taken by Curiosity Rover in Mars using the Navigation Cameras 
		(NavCam) taken last May 30, 2015.`
	})
}
nasaMarsPhotos()

// NASA Weather from Curiosity

const remsDataDate = document.getElementById('rems-data-date'),
      remsDataSeason = document.getElementById('rems-data-season'),
      remsDataMinTemp = document.getElementById('rems-data-mintemp'),
      remsDataMaxTemp = document.getElementById('rems-data-maxtemp'),
      remsDataMinGrndTemp = document.getElementById('rems-data-min-grnd-temp'),
      remsDataMaxGrndTemp = document.getElementById('rems-data-max-grnd-temp'),
      remsDataPressure = document.getElementById('rems-data-pressure'),
      remsDataAtmoOpacity = document.getElementById('rems-data-atmo-opacity'),
      remsDataUvIrradance = document.getElementById('rems-data-uv-irradiance')

async function weatherCuriosity(){
	const response = await fetch('https://api.maas2.apollorion.com/');
	const data = await response.json();

	remsDataDate.innerHTML = `Terrestrial Date: ${data.terrestrial_date}`
	remsDataSeason.innerHTML = `Season: ${data.season}`
	remsDataMinTemp.innerHTML = `Minimum Temperature: ${data.min_temp} ${data.unitOfMeasure}`
	remsDataMaxTemp.innerHTML = `Maximum Temperature: ${data.max_temp} ${data.unitOfMeasure}`
	remsDataMinGrndTemp.innerHTML = `Minimum Ground Temperature: ${data.min_gts_temp} ${data.unitOfMeasure}`
	remsDataMaxGrndTemp.innerHTML = `Maximum Ground Temperature: ${data.max_gts_temp} ${data.unitOfMeasure}`
	remsDataPressure.innerHTML = `Pressure: ${data.pressure} Pascal`
	remsDataAtmoOpacity.innerHTML = `Atmospheric Opacity: ${data.atmo_opacity}`
	remsDataUvIrradance.innerHTML = `Local Ultraviolet Irradiance Index: ${data.local_uv_irradiance_index}`

}
weatherCuriosity()

// Near Earth Objects

const neoContainer = document.getElementById('NEOcontainer')

const inputSearchNearAsteroid = document.getElementById('input-search-near-asteroid');
const inputSearchNearAsteroidBtn = document.getElementById('input-search-near-asteroid-btn');
const CADBtnRand = document.getElementById('CAD-btn-rand')

const asteroidName = document.getElementById('asteroidName')
const asteroidFullName = document.getElementById('asteroidFullName')
const estMinDiameterKm = document.getElementById('estMinDiameterKm')
const estMaxDiameterKm = document.getElementById('estMaxDiameterKm')
const absMagnitude = document.getElementById('absMagnitude')
const isPotentiallyHazardous = document.getElementById('isPotentiallyHazardous')
const isSentryObject = document.getElementById('isSentryObject')
const firstObservationDate = document.getElementById('firstObservationDate')
const lastObservationDate = document.getElementById('lastObservationDate')

const CADbtn = document.getElementById('CAD-btn')

async function neoNASA(){
const response = await fetch('https://api.nasa.gov/neo/rest/v1/neo/browse?api_key=sumkusaoBh4850aFRXhjbO6bhMtIShu5w9da0yHo')
const data = await response.json();

function loadData(i = 0){
	asteroidName.innerHTML = "Asteroid Name: " + data.near_earth_objects[i].name_limited
	asteroidFullName.innerHTML = "Asteroid Full Name: " + data.near_earth_objects[i].name
	estMinDiameterKm.innerHTML = "Estimated Min Diameter: " + data.near_earth_objects[i].estimated_diameter.kilometers.estimated_diameter_min + "km"
	estMaxDiameterKm.innerHTML = "Estimated Max Diameter: " + data.near_earth_objects[i].estimated_diameter.kilometers.estimated_diameter_max + "km"
	absMagnitude.innerHTML = "Absolute Magnitude: " + data.near_earth_objects[i].absolute_magnitude_h 
	isPotentiallyHazardous.innerHTML = "Is potentially Hazardous?: " + data.near_earth_objects[i].is_potentially_hazardous_asteroid 
	isSentryObject.innerHTML = "Is sentry Object?: " + data.near_earth_objects[i].is_sentry_object
	firstObservationDate.innerHTML = "First Observation Date: " + data.near_earth_objects[i].orbital_data.first_observation_date
	lastObservationDate.innerHTML = "Last Observation Date: " + data.near_earth_objects[i].orbital_data.last_observation_date

} 
inputSearchNearAsteroidBtn.addEventListener('click', function(){
	let isValid = 0
	for (let i=0; i < data.near_earth_objects.length; i++){
		if (inputSearchNearAsteroid.value.toUpperCase() === data.near_earth_objects[i].name_limited.toUpperCase()){
			loadData(i)
			isValid = 1
			break
		}	
	}
	if (isValid != 1){
		Swal.fire({
			title: 'Search not found! ',
			width: 500,
			padding: '3em',
			color: '#5bc0de',
			background: '#292b2c',
			confirmButtonColor: '#5bc0de',
			backdrop: `
			  rgba(0,0,0,0.4)
			  left top
			  no-repeat
			`, 
			customClass: {
				popup: 'border-radius-0'
			  }
		})
	}
})
CADBtnRand.addEventListener('click', function(){
	const index = Math.floor(Math.random()*data.near_earth_objects.length)
		loadData(index)	
	
})
}
neoNASA()



