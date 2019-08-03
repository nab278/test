<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tabtest extends Model
{
    //

    public $table = "tabtest";

    protected $fillable = [

        'name',
        'test_content',
        'created_at',
        'updated_at',
        


    ];
}
