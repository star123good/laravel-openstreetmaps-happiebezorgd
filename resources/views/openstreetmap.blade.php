@extends('layouts.app')

@section('scripts')
<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
@endsection

@section('links')
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
<style>
    #map {
        width: 100%;
        height: 500px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="map"></div>
            <p>{{ $node_xml }}</p>
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