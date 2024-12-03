<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; //java: import
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; //insert a trait
    
    protected $table = 'product';
    public $timestamps = false;
    
    protected $fillable = ['name', 'price'];
}
