<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    const STATE_SELLING = 'selling';

    const STATE_BOUGHT = 'bougth';

    public function secondaryCategory()
    {
        return $this->belongsTo(SecondaryCategory::class);
    }

    public function getIsStateSellingAttribute()
    {
        return $this->state === self::STATE_SELLING;
    }

    public function getIsStateBoughtAttribute()
    {
        return $this->state === self::STATE_BOUGHT;
    }
}
