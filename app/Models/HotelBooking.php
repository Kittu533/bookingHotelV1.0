<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelBooking extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'proof',
        'checkin_at',
        'checkout_at',
        'total_days',
        'room_id',
        'total_amounts',
        'user_id',
        'hotel_id',
        'is_paid'
    ];

    public function customer(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function hotel(){
        return $this->belongsTo(Hotel::class,'hotel_id');
    }
    public function room(){
        return $this->belongsTo(HotelRoom::class,'room_id');
    }
}
