// api url
const api_url =
	"https://api.openweathermap.org/data/2.5/weather?lat=40.7128&lon=-74.0060&appid=fdb2bb68660104da21a65101341748d0&units=metric&lang=tr";

// Defining async function
async function getapi(url) {
	
	// Storing response
	const response = await fetch(url);
	
	// Storing data in form of JSON
	var data = await response.json();
	console.log(data);
	show(data);
}
// Calling that async function
getapi(api_url);

// Function to define innerHTML for HTML table
function show(data) {
	let tab =
		``;
	
	// Loop to access all rows

		tab += `
        <div class="container text-center ap-dark-purple text-white">
        <h1>Anlık Sıcaklık Değeri</h1>
        <p class="text-center baslangic-big bold yr-liberty py-2">${data.main.temp}°C</p>
        </div>
        `
;
	
	// Setting innerHTML as tab variable
	document.getElementById("weather").innerHTML = tab;
}
