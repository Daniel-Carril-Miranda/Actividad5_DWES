<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_id',
        'checkout_date',
        'due_date',
        'returned_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // Relación con la tabla users
    }

    public function item()
    {
        return $this->belongsTo(Item::class); // Relación con la tabla items
    }
}
