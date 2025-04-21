<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DevResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  ['username' => $this->username,
        "last_login_at" => $this->last_login_at,
        "created_at" => $this->created_at,
        "updated_at" => $this->updated_at,
        "game" => $this->games 
    ];
        
    }
}
