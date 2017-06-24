<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friseur extends Model 
{

    protected $table = 'friseurs';
    public $timestamps = true;

    public function termins()
    {
        return $this->hasMany('App\Termin', 'friseur_id');
    }

}