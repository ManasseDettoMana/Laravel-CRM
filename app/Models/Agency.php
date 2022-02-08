<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    public function employments(){
        return $this->hasMany('App\Models\Employment');
    }
}
