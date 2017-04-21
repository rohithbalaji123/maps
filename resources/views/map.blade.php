 @extends('layouts.app')


	@section('content')

 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="{{ asset('js/map.js') }}"></script>
		<script>
			csrf_token = '{{ csrf_token() }}';
		</script>

		<div class="container-fluid" style="padding: 1%">
			<div class="row">
				<div class="col-sm-3">
					<div id="places" style="height: 80vh"></div>
				</div>
				<div class="col-sm-9">
					<div id="googleMap" style="height: 80vh"></div>			
				</div>
			</div>
		</div>

		<script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_KEY')}}&callback=myMap" defer></script>

	@endsection
