<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoldPriceDay extends Model
{
    protected $fillable = ['price_date', 'status', 'note', 'type'];

    public function items()
    {
        return $this->hasMany(GoldPriceItem::class);
    }
}
