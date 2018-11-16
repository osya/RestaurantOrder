<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Dish
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dish newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dish newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Dish query()
 * @mixin \Eloquent
 */
class Dish extends Model
{
    protected $fillable = ['name', 'price'];
}
