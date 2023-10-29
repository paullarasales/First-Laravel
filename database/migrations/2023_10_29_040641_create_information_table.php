<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->string('email');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
