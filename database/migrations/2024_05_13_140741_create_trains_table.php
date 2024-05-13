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
            $table->id();
            $table->string('slug', 50)->unique();
            $table->string('company', 50);
            $table->string('firstStation', 50);
            $table->string('lastStation', 50);
            $table->time('arrivingTime');
            $table->string('trainCode',20);
            $table->tinyInteger('vagonNumber');
            $table->boolean('is_onTime')->default(true);
            $table->boolean('is_cancelled')->default(false);
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
