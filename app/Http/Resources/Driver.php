<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Car;

class Driver extends JsonResource
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
            'driver_id' => $this->id,
            'driver_full_name' => $this->full_name,
            'driver_country' => $this->country,
            'driver_cars' => $this->cars
        ];
    }
}
