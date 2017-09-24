<?php

namespace App;

use App\Libraries\Uuid;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use Uuid;

    public $incrementing = false;

    protected $fillable = [
        'title','desciption','category','pictures','is_publish','user_id'
    ];

    public function User(){
        return $this->belongsTo('App\User');
    }
}
