<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformanceDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performance_data', function (Blueprint $table) {
            // search laravel datatypes https://laravel.com/docs/8.x/migrations#available-column-types
            $table->id();
            $table->decimal('application_load', 6, 2); // in %. 6-total digits, 2-decimal digits
            $table->integer('response_time'); // in milliseconds
            $table->decimal('transaction_rate', 5, 1); // in %. 5-total digits, 1-decimal digit
            $table->dateTime('received_at', $precision = 0); // optional precision (total digits)
            $table->ipAddress('sender_ip'); // ipAddress method creates a VARCHAR equivalent column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performance_data');
    }
}
