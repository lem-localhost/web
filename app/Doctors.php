<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Doctors extends Model
{
    protected $table = "doctors";

    public function rooms(){
        return $this->belongsTo('App\Rooms', 'room_id');
    }
}
