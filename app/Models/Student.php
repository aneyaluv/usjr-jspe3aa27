<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'studid';
    public $incrementing = false;

    public function college()
    {
        return $this->belongsTo(College::class, 'studcollid', 'collid');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'studprogid', 'progid');
    }
}
