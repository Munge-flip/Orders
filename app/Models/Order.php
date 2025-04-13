<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Optional: define which columns are fillable (for mass assignment)
    protected $fillable = ['customer_name', 'product', 'quantity', 'price'];
}
