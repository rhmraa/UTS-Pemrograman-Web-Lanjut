<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'department_id',
        'name',
        'position',
        'salary',
        'joined_at',
    ];

    protected $casts = [
        'salary' => 'decimal:2',
        'joined_at' => 'date',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}