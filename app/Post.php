<?php

namespace App;

use App\Libraries\Uuid;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Uuid;

    public $incrementing = false;

    protected $fillable = [
        'title','category','description','pictures','slug','tags','is_publish','user_id'
    ];

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function scopeFindSlug($query,$slug){
        return $query->where('slug','=',$slug)->firstOrFail();
    }
}
