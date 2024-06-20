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
        //
        Schema::table('destinations', function (Blueprint $table) {
            // Drop the 'lokasi' column
            $table->dropColumn('lokasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('destinations', function (Blueprint $table) {
            // Add back the 'lokasi' column
            $table->string('lokasi')->nullable();
        });
    }
};
