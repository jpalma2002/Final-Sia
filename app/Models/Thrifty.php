<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thrifty extends Model
{
    use HasFactory;
    protected $fillable = [
       'image', 'brand_name', 'description', 'price'
        
    ];
}
