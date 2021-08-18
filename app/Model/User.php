<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;
    protected $fillable = [
        'id',
        'name',
        'username',
        'password',
        'created_at',
        'updated_at'
    ];
}

