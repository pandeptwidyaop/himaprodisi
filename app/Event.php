<?php

namespace App;

use App\Libraries\Uuid;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use Uuid;

    public $incrementing = false;

    protected $fillable = [
        'title','date','category','description','pictures','slug','is_publish','user_id'
    ];

    public function User(){
        return $this->belongsTo('App\User');
    }
}
