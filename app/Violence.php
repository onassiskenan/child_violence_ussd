<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violence extends Model
{
    //
    public function ViolenceType(){
        return $this->belongsToMany(ViolenceType::class);   
     }
}
