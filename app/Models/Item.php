<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'picture',
        'price',
        'box_id',
    ];
    public function box()
    {
        return $this->belongsTo(Box::class); // Relación con la tabla boxes
    }
    public function loan()
    {
    return $this->hasOne(Loan::class);
    }
}
