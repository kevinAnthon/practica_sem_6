<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public $table='cliente';
    protected $primaryKey='idcliente';
    public $timestamps = false;
}
