<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FX extends Model
{
    protected $table = 'fxes';

    protected $primaryKey = 'fx_id';

        protected $fillable = [
            'country',
            'currency',
            'fx_buy',
            'fx_sell',
            'status',
        ];
}
