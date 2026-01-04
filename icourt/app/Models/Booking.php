<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Allow these fields to be filled
    protected $fillable = [
        'user_id', 'court_id', 'name', 'email', 'phone_number', 
        'date', 'start_time', 'end_time', 'payment_method', 
        'total_amount', 'status'
    ];

    public function court()
    {
        return $this->belongsTo(Court::class);
    }
}
