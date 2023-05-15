<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowEventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'name'=>$this->user_id,
        'dataTime' =>$this->dateTime,
        'description' =>$this->description,
        'create_by_id' =>$this->create_by_id,
        'user_id' => $this -> user->number??null,
        'ticket'=>$this->ticket,
    ];
    }
}
