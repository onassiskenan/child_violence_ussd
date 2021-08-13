<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViolenceType extends Model
{
    //
    public function Violence(){
        return $this->belongsToMany(Violence::class);   
     }
}
