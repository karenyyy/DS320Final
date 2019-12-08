
	
function initMap() {

		map2 = new google.maps.Map(document.getElementById('map2'), {
          center: {lat: 28.427274000, lng: -81.467766000},
          zoom: 8
        });
		
		 var mapOptions = {
                zoom: 12,
                scrollwheel: false,
                center: new google.maps.LatLng(28.427274000, -81.467766000)

            };
            var mapElement = document.getElementById('googleMap');
            var googleMap = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(28.427274000, -81.467766000),
                googleMap: googleMap,
                title: 'Ramble!',
                icon: 'img/googlemap/1.png',
                animation: google.maps.Animation.BOUNCE
            });

		
        var myLatlng = {lat: -25.363, lng: 131.044};

        var map6 = new google.maps.Map(document.getElementById('map86'), {
          zoom: 4,
          center: myLatlng
        });

        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map6,
          title: 'Click to zoom'
        });
		
        var map7 = new google.maps.Map(document.getElementById('map7'), {
          zoom: 4,
          center: {lat: -25.363882, lng: 131.044922 }
        });

		
		
      }
	  
     
 

