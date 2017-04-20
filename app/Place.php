<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public static function store($user_id, $latitude, $longitude, $place) {
        $location = new Place;
        $location->user_id = $user_id;
        $location->latitude = $latitude;
        $location->longitude = $longitude;
        $location->place = $place;

        return $location->save();
    }
}
