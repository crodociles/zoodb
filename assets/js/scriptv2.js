/*var switchMap = false;
var map;

function initMap() {

    var mapCanvas = document.getElementById('map-canvas');

    var myLatlng = new google.maps.LatLng(54.5493878,-4.1389568);

    var mapOptions = {
        zoom: 5,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    
    map = new google.maps.Map(mapCanvas, mapOptions)

    setMarkers(map);

}

var places = [
  ['1', 53.149619, 0.337323],
  ['1', 53.231630, -0.540505],
  ['3', 51.459912, -2.587621],
  ['4', 51.518732, -0.129758]
];

function setMarkers(map) {
  // Adds markers to the map.
  for (var i = 0; i < places.length; i++) {
    var place = places[i];
    var marker = new google.maps.Marker({
      position: {lat: place[1], lng: place[2]},
      map: map,
      title: place[0]
    });
  }

}*/




    /*$('#result-type-switch').click(function(){
        if(switchMap){
            switchMap = false;
            console.log("show list");
            $('#result-type-switch').text('Show results as map');
            $('#search-result-wrapper').toggleClass('hidden');
            $('#map-wrapper').toggleClass('hidden');
        }else{
            switchMap = true;
            console.log("show map");
            $('#result-type-switch').text('Show results as list');
            $('#search-result-wrapper').toggleClass('hidden');
            $('#map-wrapper').toggleClass('hidden');
            initMap();
        }
    });
})

*/