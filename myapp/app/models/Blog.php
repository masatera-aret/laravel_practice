<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //テーブル名
    protected $table = 'blogs';

    //mutableデータ
    protected $fillable = [
        'title',
        'content'
    ];
}
