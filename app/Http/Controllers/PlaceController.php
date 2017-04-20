<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Place as Location;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $latitude = (string)$request->latitude;
        $longitude = (string)$request->longitude;
        $place  = $request->place;

        if(!$latitude || !$longitude || !$place) {
            return response()->json('Missing Parameters', 400);
        }

        if(!Location::store($user_id, $latitude, $longitude, $place)) {
            return response()->json('Error while updating', 500);
        }

        return response()->json('Place store successful', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
