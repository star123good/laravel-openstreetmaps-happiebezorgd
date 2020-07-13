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
    private function overpassQuery($kind, $data)
    {
        $type = 'json';
        $timeout = 100;
        $amenities = ['restaurant', 'fast_food'];

        $query = '[out:' . $type . ']';
        $query .= '[timeout:' . $timeout . ']';
        $query .= ';';
        $query .= '(';

        foreach($amenities as $amenity) {
            if ($kind == 'bbox') {
                $bbox = implode(',', $data);
                $query .= 'nwr["amenity"="' . $amenity . '"](' . $bbox . ');';
            }
            else if ($kind == 'name') {
                $name = $data;
                $query .= 'nwr["amenity"="' . $amenity . '"]["name"="' . $name . '"];';
            }
            else if ($kind == 'postal_code') {
                $postal_code = $data;
                $query .= 'nwr["amenity"="' . $amenity . '"]["addr:postcode"="' . $postal_code . '"];';
            }
        }

        $query .= ');';
        $query .= 'out body;';
        $query .= '>;';
        $query .= 'out skel qt;';

        $query = "https://overpass-api.de/api/interpreter?data=" . urlencode($query);
        // $query = "https://lz4.overpass-api.de/api/interpreter?data=" . urlencode($query);
        // $query = "https://z.overpass-api.de/api/interpreter?data=" . urlencode($query);

        return $query;
    }

    /**
     * overpass api
     */
    private function overpassApi($query)
    {
        try {
            $response = file_get_contents($query);
            $data = json_decode($response, true);
            $data = $data['elements'];
            $data = array_filter($data, function($e) {
                return (isset($e['tags']['name']));
            });
        }
        catch(Exception $e) {
            $data = array();
        }

        return $data;
    }

    /**
     * GET /openstreetmap
     */
    public function openstreetmap(Request $request)
    {
        if ($request->has('postal_code')) {
            $postal_code = $request->input('postal_code');
            $query = $this->overpassQuery('postal_code', $postal_code);
            $result = $this->overpassApi($query);
        }
        else {
            $postal_code = null;
            $query = null;
            $result = null;
        }

        return view('openstreetmap', [
            'postal_code' => $postal_code, 
            'query' => $query, 
            'result' => $result,
        ]);
    }
}
