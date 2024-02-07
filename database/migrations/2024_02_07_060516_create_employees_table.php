<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('first_name')->nullable(false);
            $table->string('last_name')->nullable(false);
            $table->date('date_birth')->nullable(false);
            $table->string('phone_number')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('province')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('zip_code')->nullable(false);
            $table->string('ktp')->nullable(false);
            $table->string('position')->nullable(false);
            $table->string('bank')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
