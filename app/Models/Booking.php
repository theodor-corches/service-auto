<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'service', 'date', 'hour', 'price_range', 'notes',
        'payment_method', 'name', 'phone', 'email', 'status'
    ];
    
}
