<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    //允许写入字段
    protected $fillable = ['id', 'name', 'email', 'password', 'login_ip'];
    protected $hidden   = ['password', 'remember_token'];
}
