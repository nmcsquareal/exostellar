document.addEventListener("DOMContentLoaded", function () {
  //Astro Pic of the Day

  const picOfTheDayImg = document.getElementById("pic-of-the-day");
  const expOfTheDay = document.getElementById("exp-of-the-day");
  const titleOfTheDay = document.getElementById("title-of-the-day");
  const copyright = document.getElementById("copy-of-the-day");
  const dateDay = document.getElementById("date-of-the-day");

  async function picOfTheDay() {
    const response = await fetch(
      "https://api.nasa.gov/planetary/apod?api_key=X3lNGCXslyi0gvq86Cxhi2f6xOcdYaacNXmdGMiA"
    );
    const datos = await response.json();

    // picOfTheDayImg.src = datos.url;
    titleOfTheDay.innerHTML = datos.title;

    if (datos.copyright == null || datos.copyright == undefined) {
      copyright.remove();
    } else {
      copyright.innerHTML = `Image credit and copyright: ${datos.copyright}`;
    }

    picOfTheDayImg.innerHTML =
      datos.media_type === "image"
        ? `<img class="mx-auto my-3 w-75" src=${datos.url}></img>`
        : `<iframe class="mx-auto my-3 w-75" src=${datos.url}></iframe>`;
    dateDay.innerHTML = "Date: " + datos.date;
    expOfTheDay.innerHTML = datos.explanation;
    console.log(datos);
  }
  picOfTheDay();
});
