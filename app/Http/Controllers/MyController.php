<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Driver;
use App\Http\Resources\Driver as DriverResource;
use App\Models\Car;
use App\Http\Resources\Car as CarResource;

class MyController extends Controller
{
    
    public function driver($id){
        $driver = Driver::find($id);
        return new DriverResource($driver);
    }

    public function drivers(){
        $drivers = Driver::all();
        return DriverResource::collection($drivers);
    }

    public function car($id){
        $car = Car::find($id);
        return new CarResource($car);
    }

    public function cars(){
        $cars = Car::all();
        return CarResource::collection($cars);
    }
    

}
