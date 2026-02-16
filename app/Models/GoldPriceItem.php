<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoldPriceItem extends Model
{
    protected $fillable = [
        'gold_price_day_id',
        'weight',
        'gold_date',
        'selling_price',
        'buyback_price',
        'status'
    ];
}
