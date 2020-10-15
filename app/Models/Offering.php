<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'currency',
        'person',
        'date',
        'is_current',
        'type_id',
        'transfer_id'
    ];

    public function type(){
        return $this->belongsTo(\App\Models\Type::class);
    }
}
