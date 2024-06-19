<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class Opportunity extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'title',
        'body',
        'file',
        'location',
        'job_type',
        'work_place_type',
        'job_hours',
        'qualifications',
        'skills_req',
        'salary',
        'vacant'
    ];

    protected $casts = [
        'qualifications' => 'array',
        'skills_req' => 'array'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['*']);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function savedByUsers() {
        return $this->belongsToMany(User::class, 'saves');
    }
    public function applies(){
        return $this->hasMany(Apply::class);
    }
}
