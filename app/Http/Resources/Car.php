<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Driver as DriverModel;

class Car extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'car_id' => $this->id,
            'car_model' => $this->model,
            'car_color' => $this->color,
            'car_year' => $this->year,
            'car_driver' => $this->driver
        ];
    }
}
