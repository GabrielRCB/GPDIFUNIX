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
        Schema::create('table_our_contact', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->string('no_telp');
            $table->string('web');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('facebook');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_our_contact');
    }
};
