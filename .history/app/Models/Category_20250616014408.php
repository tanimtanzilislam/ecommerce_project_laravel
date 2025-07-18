<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasFactory;

class Category extends Model
{
    
     protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
    ];
}
