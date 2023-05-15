<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $hidden = [
        'user_id',
        'event_id',
        'dateTime',
        'price',
        'remember_token',
    ];
}
