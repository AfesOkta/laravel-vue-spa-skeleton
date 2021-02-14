<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const COLUMN_ID             = 'id';
    const COLUMN_NAME           = 'name';

    protected $guarded = [self::COLUMN_ID];
}
