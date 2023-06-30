<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Environment extends Model
{
    use HasFactory;
    // protected $appends  = ['is_guest'];
    // function getIsGuestAttribute(): string
    // {
    //     return $this->available == 'guest' ? true : false;
    // }
}
