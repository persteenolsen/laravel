<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   // protected $fillable = ['name', 'email', 'phone', 'password'];
   protected $fillable = ['name', 'email', 'phone'];
}