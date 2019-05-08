<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    //declare the table name
    protected $table = 'details';

    //declare the table fields
    protected $fillable = [
        'address','location','phone','hobby'
    ];
}
