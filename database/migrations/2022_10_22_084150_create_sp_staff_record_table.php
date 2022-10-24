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
        Schema::create('sp_staff_record', function (Blueprint $table) {
            $table->id();
            $table->string('staff_id');
            $table->string('name');
            $table->string('email');
            $table->string('department');
            $table->string('staff_profile');
            $table->integer('total_workhours_perMonth');
            $table->integer('total_overtime_perMonth');
            $table->integer('total_lateCheckIn_perMonth');
            $table->integer('total_salary_perMonth');
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
        Schema::dropIfExists('sp_staff_record');
    }
};
