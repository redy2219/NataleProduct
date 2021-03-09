<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected array $table = [
        (string)'id',
        (string)'name',
        (string)'description',
        (int)'price',

    ];
}
