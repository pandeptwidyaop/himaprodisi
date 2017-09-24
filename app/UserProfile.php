<?php

namespace App;

use App\Libraries\Uuid;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use Uuid;

    protected $fillable = [
        'name','birthday','phone','address','sex','user_id'
    ];

    public $incrementing = false;

    public function User(){
        return $this->belongsTo('App\User');
    }

}
