<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Review;

class ProductsResource extends Resource
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
            'ProductName' => $this->name,
            'description' => $this->description,
            'image_url' => $this->image_url,
            'price' => $this->price, 
            'discount' => $this->discount
        ];
    }
}
