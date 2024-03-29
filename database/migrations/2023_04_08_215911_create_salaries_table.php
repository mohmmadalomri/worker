<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new
class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->references('id')->on('users');
            $table->date('start_day');
            $table->date('end_day');
            $table->integer('Job_number');
            $table->string('employee_name');
            $table->integer('national_number');
            $table->bigInteger('section_id');
            $table->double('deductions');
            $table->float('discounts');
            $table->double('tax');
            $table->double('social_security');
            $table->double('net_salary');
            $table->enum('status',['approved','pending'])->default('pending');
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
        Schema::dropIfExists('salaries');
    }
};
