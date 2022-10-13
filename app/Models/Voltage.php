<?php

namespace App\Models;
use App\Casts\VoltageEncryption;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voltage extends Model
{
    use HasFactory;

    protected $casts = [
        'name' => VoltageEncryption::class,
        'email' => VoltageEncryption::class
    ];
}
