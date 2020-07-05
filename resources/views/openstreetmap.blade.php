@extends('layouts.app')

@section('scripts')
<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
@endsection

@section('links')
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
<style>
    #map {
        width: 100%;
        /* height: 500px; */
    }
    textarea {
        min-height: 120px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="map"></div>
            <h1 class="text-center">Find all restaurants</h1>
            <h3 class="mt-lg-3">Postal Code:</h3>
            <form action="" method="GET">
                <input type="text" name="postal_code" placeholder="Type the postal code">
                <button type="submit">Search</button>
            </form>
            @if($postal_code != null)
                <h3 class="mt-lg-3">Result({{ $postal_code }}):</h3>
                <ul>
                    @foreach($result as $row)
                        <li>{{ $row['tags']['name'] }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
/*
    // initialize Leaflet
    var map = L.map('map').setView({lon: 0, lat: 0}, 2);

    // add the OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
    }).addTo(map);

    // show the scale bar on the lower left corner
    L.control.scale().addTo(map);

    // show a marker on the map
    L.marker({lon: 0, lat: 0}).bindPopup('The center of the world').addTo(map);
*/
</script>
@endsection