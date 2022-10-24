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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('staff_id');
            $table->string('name');
            $table->string('gender');
            $table->string('address');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('department');
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
        Schema::dropIfExists('profiles');
    }
};
