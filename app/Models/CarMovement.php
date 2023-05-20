<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMovement extends Model
{
    use HasFactory;
    protected $table = 'car_movements';

    protected $fillable = [
        'car_id',
        'direction',
        'date',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
