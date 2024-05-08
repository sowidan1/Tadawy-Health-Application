<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heart_rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'heart_rate',
    ];
}
