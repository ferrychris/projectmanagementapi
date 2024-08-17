<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_model extends Model
{
    use HasFactory;

    $protected $table = 'Transaction'

    $protected $fillable = [
        'amount',
        'transaction_details'
    ]
}
