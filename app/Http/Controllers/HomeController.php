<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * overpass query
     */
    private function overpassQuery()
    {
        $query = '
            [out:json][timeout:25];
            (
            node["amenity"="restaurant"]({{bbox}});
            way["amenity"="restaurant"]({{bbox}});
            relation["amenity"="restaurant"]({{bbox}});
            node["amenity"="fast_food"]({{bbox}});
            way["amenity"="fast_food"]({{bbox}});
            relation["amenity"="fast_food"]({{bbox}});
            );
            out body;
            >;
            out skel qt;
        ';
    }

    /**
     * overpass api
     */
    private function overpassApi($query)
    {
        $node_xml = file_get_contents("http://overpass-api.de/api/interpreter?data=" . urlencode($query));
        return $node_xml;
    }

    /**
     * GET /openstreetmap
     */
    public function openstreetmap()
    {
        $node_id = 1422314245;
        $query= "node($node_id);out;";
        $node_xml = file_get_contents("http://overpass-api.de/api/interpreter?data=" . urlencode($query));
        
        return view('openstreetmap', ['node_xml' => $node_xml]);
    }
}
