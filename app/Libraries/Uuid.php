<?php
/**
 * Created by PhpStorm.
 * User: John Doe
 * Date: 9/24/2017
 * Time: 11:04 PM
 */

namespace App\Libraries;

use Webpatser\Uuid\Uuid as Key;


trait Uuid
{
    protected static function boot(){
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Key::generate()->string;
        });
    }
}