<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students1';
    protected $fillable = ['student_id','student_name','student_tel','student_password'];
}
