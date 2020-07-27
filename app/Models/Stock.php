<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    protected $guarded = [
        'id' //Stocksテーブルのidカラムは外部からの変更を許可しない状態
    ];
}
