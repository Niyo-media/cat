<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('stud_regno')->primaryKey();
            $table->string('stud_fname');
            $table->string('stud_lname');
            $table->string('stud_gender');
            $table->string('stud_email')->Unique();
            $table->string('depart_code');
            $table->string('stud_phone')->unique();
            $table->string('stud_password');
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
        Schema::dropIfExists('students');
    }
};
