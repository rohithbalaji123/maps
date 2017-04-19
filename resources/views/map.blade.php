<!DOCTYPE html>
<html>
	<head>
		<title>Maps</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid" style="padding: 1%">
			<div class="row">
				<div class="col-sm-3">
					<div id="places"></div>		
				</div>
				<div class="col-sm-9">
					<div id="googleMap" style="height: 80vh"></div>			
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/map.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_KEY')}}&callback=myMap"></script>
	</body>
</html>