<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Reason extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'title'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*']);
    }

    public function reports() {
        return $this->hasMany(Report::class, 'id', 'reason_id');
    }

}
