<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "maker_id",
        "model_id",
        "year",
        "price",
        "vin",
        "mileage",
        "car_type_id",
        "fuel_type_id",
        "user_id",
        "city_id",
        "address",
        "phone",
        "description",
        "published_at",
    ];

    public function feature(): hasOne
    {
        return $this->hasOne(CarFeature::class);
    }

    public function primaryImage(): hasOne
    {
        return $this->hasOne(CarImage::class)->oldestOfMany("position");
    }

    public function images(): hasMany
    {
        return $this->hasMany(CarImage::class);
    }
}
