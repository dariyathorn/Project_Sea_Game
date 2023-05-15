<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public function teams()
    {
        return $this->belongsToMany(Team::class)->using(TeamEvent::class)->withPivot('price');
    }
}
