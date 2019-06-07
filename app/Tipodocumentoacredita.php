<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipodocumentoacredita extends Model
{
    protected $table = 'tipodocumentoacreditas';
    public $timestamps=false;

    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'string';

    
    public function trabajador()
    {
        return $this->hasMany('App\Derechohabiente');
    }

}
