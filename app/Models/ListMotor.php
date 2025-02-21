<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListMotor extends Model
{
    use HasFactory;
    protected $cast=[
        'layanan'=>'array',
        'seal'=>'array'
    ];
}
