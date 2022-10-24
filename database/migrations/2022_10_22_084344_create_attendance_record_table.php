<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_record', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id');
            $table->dateTime('timestamps_checkIn');
            $table->dateTime('timestamps_checkOut');
            $table->dateTime('location_checkIn');
            $table->dateTime('location_checkOut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_record');
    }
};
