<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cofasilitator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nim',
        'email',
        'phone',
    ];
}
