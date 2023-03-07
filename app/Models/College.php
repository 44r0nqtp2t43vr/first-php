<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    // use HasFactory;
    public $incrementing = false;
    protected $primarykey = 'collegeid';
    public $timestamps = false;
}
