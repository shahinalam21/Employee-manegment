<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp_management extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'post',
        'selory',
        'image'
    ];
}
