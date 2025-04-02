<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /** @use HasFactory<\Database\Factories\InventoryFactory> */
    use HasFactory;

    protected $guarded = [];
    public const TYPE_IN = 'in';
    public const TYPE_OUT = 'out';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
