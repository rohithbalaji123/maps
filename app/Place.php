<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function users() {
        return $this->hasMany('App\User');
    }

    public static function store($user_id, $latitude, $longitude, $place) {
        $location = new Place;
        $location->user_id = $user_id;
        $location->latitude = $latitude;
        $location->longitude = $longitude;
        $location->place = $place;

        return $location->save();
    }

    public static function getPlacesByUserId($user_id) {
        return Place::where('user_id', $user_id)->get();
    }
}
