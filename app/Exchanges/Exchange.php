<?php

namespace App\Exchanges;

use App\Teams\Team;
use Database\Factories\ExchangeFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exchange extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected static function newFactory(): Factory
    {
        return ExchangeFactory::new();
    }
}
