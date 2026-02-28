<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HAsFactory;
use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{   
    use HasFactory;

    protected $fillable = [
        'universe' ,
        'company' ,
        'age'
    ];

}   