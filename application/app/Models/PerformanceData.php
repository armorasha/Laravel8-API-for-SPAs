<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceData extends Model
{
    use HasFactory;

    // fillable to be added here, so that no unwanted columns can possibly be updated by malicious user and also required columns can be updated in the database through an API call. If fillable is not added here, POST requests by postman will fail.
    protected $fillable = [
        'application_load', 'response_time', 'transaction_rate', 'received_at', 'sender_ip'
    ];
}
