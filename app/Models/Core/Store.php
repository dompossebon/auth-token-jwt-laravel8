<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        "name_fantasy", "cnpj", "street", "number", "complement", "city", "state", "phone", "site", "email"
    ];
}
