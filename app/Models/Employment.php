<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    public function agencies(){
        return $this->belongsTo('App\Models\Agency');
    }
}
