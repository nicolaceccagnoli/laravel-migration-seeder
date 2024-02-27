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
        Schema::create('trains', function (Blueprint $table) {

            // id -> unsigned big integer + AUTO_INCREMENT + PRIMARY KEY
            $table->id();
            // company -> varchar(64) NOT NULL
            $table->string('company', 64);
            // departure_station -> VARCHAR(64) NOTNULL
            $table->string('departure_station', 64);
            // arrival_station -> VARCHAR(64) NOTNULL
            $table->string('arrival_station',64);
            // departure_hour -> DATETIME NOTNULL
            $table->dateTime('departure_hour', $precision = 0);
            // arrival_hour -> DATETIME NOTNULL
            $table->dateTime('arrival_hour', $precision = 0);
            // train_code -> VARCHAR(10) NULL
            $table->string('train_code',10)->nullable();
            // carriages_number -> TINYINT NULL
            $table->tinyInteger('carriages_number')->nullable()->unsigned();
            // on_time -> BOOLEAN
            $table->boolean('on_time')->nullable();
            // deleted -> BOOLEAN
            $table->boolean('deleted')->nullable();
            // Crea 2 colonne: created_at e updated_at
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
