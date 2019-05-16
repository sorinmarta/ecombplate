<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Product belongs to User statement
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
