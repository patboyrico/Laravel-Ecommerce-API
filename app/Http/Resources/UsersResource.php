<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class UsersResource extends Resource
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
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'country' => $this->country,
            'state' => $this->state,
            'role' => $this->role,
            'number' => $this->number,
            'address' => $this->address,
            'address2' => $this->address2,
            'altnumber' => $this->number,
            'email' => $this->email,
        ];
    }
}
