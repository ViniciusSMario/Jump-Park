<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'vehiclePlate',
        'entryDateTime',
        'exitDateTime',
        'priceType',
        'price',
        'userId'
    ];

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'userId');
    }
}
