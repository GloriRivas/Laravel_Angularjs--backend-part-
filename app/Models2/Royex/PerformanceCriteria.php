<?php

namespace App\Models2\Royex;

use Illuminate\Database\Eloquent\Model;

class PerformanceCriteria extends Model
{
    protected $table = 'royex_performance_criteria';
    protected $primaryKey = 'performance_criteria_id';

    protected $fillable = [
        'performance_criteria_id', 'performance_category_id','performance_criteria_name'
    ];

    public function category(){
        return $this->belongsTo(PerformanceCategory::class,'performance_category_id');
    }
}
