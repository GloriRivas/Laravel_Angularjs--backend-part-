<?php

namespace App\Models2\Royex;

use Illuminate\Database\Eloquent\Model;

class TaxRule extends Model
{
    protected $table = 'royex_tax_rule';
    protected $primaryKey = 'tax_rule_id';

    protected $fillable = [
        'tax_rule_id', 'amount','percentage_of_tax','amount_of_tax','gender'
    ];
}
