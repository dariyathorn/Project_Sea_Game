<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowTeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this ->id,
            'name' => $this -> name,
            'create_by_id' => $this -> create_by_id,
            'member'=> $this-> member,
            'team_event' => $this -> post??null,
            'user_id'=> $this->post??null,
        ];
    }
}
