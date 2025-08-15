<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModal;

class Model extends EloquentModal
{
    public $timestamps = false;
    protected $fillable = ["name", "maker_id"];
}
