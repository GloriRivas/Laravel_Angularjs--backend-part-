<?php

namespace App\Models2\Royex;

use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    protected $table = 'royex_allowance';
    protected $primaryKey = 'allowance_id';

    protected $fillable = [
        'allowance_id', 'allowance_name','allowance_type','percentage_of_basic','limit_per_month'
    ];
}
