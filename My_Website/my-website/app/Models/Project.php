<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    Protected $fillable = [
    'name',
    'image',
    'description'
    ];
}
