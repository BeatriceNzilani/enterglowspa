<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';  
    protected $fillable = [
        'name',
        'email',
        'phone_no',
        'date',
        'time',
        'special_request',
    ];

}
