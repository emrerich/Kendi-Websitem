function getUserList(){
    const span = document.getElementById("weather");
    fetch("https://api.ambeedata.com/weather/latest/by-lat-lng?lat=40.730610&lng=-73.935242", {
	"method": "GET",
	"headers": {
		"x-api-key": "b191bc9c2f437847e5cbfbe37cd928139400fd5cc46dc307621b9df6f82eba8a",
		"Content-type": "application/json"
	}
})
    .then(response=>response.json())
    .then(response=>{
       console.log(response);
     
            span.innerHTML+=`
            <p>${response[0].summary}</p>

          `
        
        
               

        
    })

}
getUserList();


