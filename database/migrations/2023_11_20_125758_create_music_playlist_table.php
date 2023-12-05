<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public $timestamps = false;
    
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('music_playlist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('playlist_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('music_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('music_playlist');
    }
};
