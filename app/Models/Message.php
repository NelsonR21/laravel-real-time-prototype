<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $primaryKey = 'id';

    protected $fillable = [
        'message',
        'date'
        // 'person_id'
    ];

    // public function user () {
    //     return $this->belongsTo('App\User');
    // }

}
