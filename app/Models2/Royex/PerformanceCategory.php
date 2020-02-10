<?php

namespace App\Models2\Royex;

use Illuminate\Database\Eloquent\Model;

class PerformanceCategory extends Model
{
    protected $table = 'royex_performance_category';
    protected $primaryKey = 'performance_category_id';

    protected $fillable = [
        'performance_category_id', 'performance_category_name'
    ];
}
