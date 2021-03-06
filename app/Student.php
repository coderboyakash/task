<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id', 
        'name',
        'address', 
        'rollno', 
        'email', 
        'class', 
        'phone'
    ];
}
