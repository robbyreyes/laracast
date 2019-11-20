<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    protected $table ='admin_user';
    //Primary Key
    public $primaryKey = 'admin_id';
    //Timestamps - default true; false if not necessary
    public $timestamps = true;
}
