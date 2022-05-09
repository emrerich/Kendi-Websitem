// api url
const api_url =
	"https://api.chess.com/pub/puzzle";

// Defining async function
async function getapi(url) {
	
	// Storing response
	const response = await fetch(url);
	
	// Storing data in form of JSON
	var data = await response.json();
	console.log(data);
	if (response) {
		hideloader();
	}
	show(data);
}
// Calling that async function
getapi(api_url);

// Function to hide the loader
function hideloader() {
	document.getElementById('loading').style.display = 'none';
}
// Function to define innerHTML for HTML table
function show(data) {
	let tab =
		``;
	
	// Loop to access all rows

		tab += `
        <h1> Chess.com Günün Bulmacası </h1>
        <a href="${data.url}"><img src=${data.image} width="250"></img></a>
        <p>Çözmek için resme tıklayınız</p>
        `
;
	
	// Setting innerHTML as tab variable
	document.getElementById("satranc").innerHTML = tab;
}