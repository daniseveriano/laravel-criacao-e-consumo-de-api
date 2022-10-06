<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'client',
        'address',
        'city',
        'zipcode',
        'phone',
    ];
}

//isso é uma model
//Comando que cria a model e migration ao mesmo tempo: php artisan make:model Client -m
