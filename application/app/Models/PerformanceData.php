<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceData extends Model
{
    use HasFactory;

    // fillable to be added here, so that no unwanted columns can possibly be updated by malicious user and only allowed columns can be updated in the database through this model.
}
