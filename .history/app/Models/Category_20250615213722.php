<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
    ];
}
