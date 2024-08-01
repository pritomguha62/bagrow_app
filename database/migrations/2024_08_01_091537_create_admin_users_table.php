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
        Schema::create('admin_users', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->integer('email_verified')->nullable();
            $table->string('verify_token')->nullable();
            $table->string('whatsapp')->unique();
            $table->string('home_town')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('pro_pic')->nullable();
            $table->unsignedBigInteger('role_id')->default(1);
            $table->foreign('role_id')->references('role_id')->on('roles');
            $table->integer('status')->default(1);
            $table->string('password');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_users');
    }
};
