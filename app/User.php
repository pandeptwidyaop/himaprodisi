<?php

namespace App;

use App\Libraries\Uuid;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,Uuid;

    protected $connection = 'mysql-master';

    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public $incrementing = false;

    public function UserProfile(){
        return $this->hasOne('App\UserProfile');
    }

    public function Event(){
        return $this->hasMany('App\Event');
    }

    public function Post(){
        return $this->hasMany('App\Post');
    }

    public function Content(){
        return $this->hasMany('App\Content');
    }
}
