<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reporting extends Model
{
    protected $fillable = [

        'report_date' ,
        'report_type' ,
        'report_amount',
        'name' ,
        'email' ,
        'report_detail',
    ];
}
