<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;

    public function termins()
    {
        return $this->hasMany('App\Termin', 'user_id');
    }

}