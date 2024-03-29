<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'serialnumber','type', 'trademark', 'so', 'model', 'status', 'price', 'ram', 'dataram', 'hdd', 'datahdd', 'description', 'user_id',
    ];
}
