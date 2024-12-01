<?php

namespace Wildwestriverrider\LaravelAddressable\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UsState extends Model
{
    protected $guarded = [];

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }
}
