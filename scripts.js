//Weather API
function displayWeather(response) {
    console.log(response);

    var iconCode = response.weather[0].icon;
    var iconUrl = "http://openweathermap.org/img/w/" + iconCode + ".png";
    var weatherCond = response.main.temp;
    var roundedCond = Math.round(weatherCond);

    conditions.innerHTML = `<p>Current Conditions: ${roundedCond}&deg;C</p>
    <p> <img src='${iconUrl}' alt='Icon depicting current weather.' title='${response.weather[0].description}'></p> 
    <p>${response.wind.speed} kph</p>`;
}

//Google Map API
function initMap() {

    var locations = [
        ['Beach Resort', '11.356342', '120.727134', 'Test'],
        ['Amanpulo Dive Center', '11.358236', '120.723813', 'test2'],
        ['Picnic Grove', '11.348011', '120.735486', 'test3']
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: new google.maps.LatLng(11.354207, 120.7298428),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            animation: google.maps.Animation.DROP
        });

        var contentString = `
        <div id="box">
            <h1>${locations[0]}</h1>
            <p>${locations[3]}</p>
        </div>`;

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

}