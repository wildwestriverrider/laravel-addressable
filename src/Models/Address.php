<?php

namespace Wildwestriverrider\LaravelAddressable\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    protected $guarded = [];

    public function state(): BelongsTo
    {
        return $this->belongsTo(UsState::class);
    }
}
