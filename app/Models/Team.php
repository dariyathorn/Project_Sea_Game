<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public function events()
    {
        return $this->belongsToMany(Event::class)->using(TeamEvent::class)->withPivot('price');
    }

    protected $fillable = [
        'name',
        'create_by_id',
        'member',
    ];
    public static function store($request, $id = null){
        $team = $request->only(
            'name',
            'create_by_id',
            'member',
        );
        if($id){
            $team = self::updateOrCreate(['id'=>$id], $team);

        }
        else{
            $team = self::create($team);
            $id = $team->id;
        }
        return $team;
    }
}
