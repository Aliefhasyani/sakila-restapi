<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warship extends Model
{
    protected $table = 'warships';

    protected $fillable = ['name','type','country','mainarmaments'];
}
