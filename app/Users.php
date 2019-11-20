<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps - default true; false if not necessary
    public $timestamps = false;
}
