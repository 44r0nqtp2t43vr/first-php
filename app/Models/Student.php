<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // use HasFactory;
    // protected $table = 'usjrstudents';
    public $incrementing = false;
    protected $primarykey = 'studentid';
    public $timestamps = false;

    public function getProgramName() {
        return $this->hasOne(Program::class, 'programid', 'programid');
    }

    public function getCollegeName() {
        return $this->hasOne(College::class, 'collegeid', 'collegeid');
    }
}
