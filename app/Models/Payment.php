<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;

    protected $guarded = [];
    public const CASH = "cash";
    public const QRIS = "qris";

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
