<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFeature extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = "car_id";

    protected $fillable = [
        "car_id",
        "abs",
        "air_contioning",
        "power_windows",
        "power_door_locks",
        "cruise_control",
        "bluetooth_connectivity",
        "remote_start",
        "gps_navigation",
        "heater_seats",
        "climate_contol",
        "rear_parking_sensors",
        "leather_seats",
    ];
}
