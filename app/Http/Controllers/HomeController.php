<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\CarType;

class HomeController extends Controller
{
    public function index()
    {
        $car = Car::find(1);

        $carType = CarType::where("name", "Hatchback")->first();

        $cars = Car::whereBelongsTo($carType)->get();
        dd($cars);
        return view("index");
    }
}
