function myMap() {

	var mapCanvas = document.getElementById("googleMap");
	var mapCenter = new google.maps.LatLng(22.99885159414291, 78.0908203125);
	var mapProp = {
		center: mapCenter,
		zoom: 5,
	};

	var map = new google.maps.Map(mapCanvas, mapProp);

	var marker = new google.maps.Marker({
		position: mapCenter,
		animation: google.maps.Animation.BOUNCE,
	});

	var geocoder = new google.maps.Geocoder;
	var infowindow = new google.maps.InfoWindow;

	map.addListener('click', function(event) {
		map.panTo({
			lat: event.latLng.lat(),
			lng: event.latLng.lng(),
		});
		geocodeLatLng(geocoder, map);
		// $.ajax({
		// 	url: ""
		// })
	});

	function geocodeLatLng(geocoder, map) {
		var center = map.getCenter();
		var latlng = {
			lat: center.lat(),
			lng: center.lng(),
		};

		geocoder.geocode({location: latlng}, function(results, status) {
			if(status === 'OK') {
				var size = results.length;
				if(results[size - 2]) {
					marker.setAnimation(null);
					marker = new google.maps.Marker({
						position: latlng,
						map: map,
						animation: google.maps.Animation.BOUNCE,
					});
					infowindow.setContent(results[size - 2].formatted_address);
					infowindow.open(map, marker);

					$('#places').append(results[size - 2].formatted_address+'<br>');
					console.log(results);
					//document.getElementById("places").innerHTML = results[1].formatted_address;
				}
			}
		});
	}
}