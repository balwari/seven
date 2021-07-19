<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Incident extends Model
{
    // use HasFactory;

    protected $guarded = [];
    
    protected $casts = [
        'people' => 'array', 
        'location' => 'array'
        // Will convarted to (Array)
    ];

}
