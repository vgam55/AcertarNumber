<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acertar extends Model
{
    use HasFactory;
    public static function crear($min,$max)
    {
        return floor(($min+$max)/2);
    }
}
