function getUserList(){
    const table = document.getElementById("userTable");
    fetch("https://api.sportsdata.io/v3/nba/scores/json/Players/NY?key=a1dd423d477a4cdfa424c9cd57f85a7c")
    .then(response=>response.json())
    .then(data=>{
        // console.log(data);
           for(player of data)
           {
               console.log(player);
               table.innerHTML+=`
               <div class="card-group">
                    <div class="card special-card" style="width: 10rem;">
                        <img src="${player.PhotoUrl}" class="card-img-top" alt="">
                            <div class="card-body">
                             <h5 class="card-title bold">${player.FirstName}</h5>
                             <h5 class="card-title bold">${player.LastName}</h5>
                             <p class="card-text ap-knicks-blue text-center italic">${player.Position} | ${player.Jersey}</p>
                            </div>
                    </div>
                </div>

             `
           }
        
    })
}
getUserList();