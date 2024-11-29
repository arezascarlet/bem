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
        Schema::table('users', function (Blueprint $table) {
            $table->after('email', function ($table) {
                $table->string('phone_number')->nullable();
                $table->text('address')->nullable();
                $table->string('image')->nullable();
                $table->string('bio')->nullable();
                $table->string('link')->nullable();
                $table->boolean('gender')->nullable();
            });
            $table->after('remember_token', function ($table) {
                $table->boolean('active')->default('1');
                $table->tinyInteger('status')->unsigned()->default('1');
                $table->foreignId('created_by')->nullable();
                $table->foreignId('updated_by')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone_number');
            $table->dropColumn('address');
            $table->dropColumn('image');
            $table->dropColumn('bio');
            $table->string('link')->nullable();
            $table->boolean('gender')->nullable();
            $table->dropColumn('active');
            $table->dropColumn('status');
            $table->dropColumn('created_by');
            $table->dropColumn('updated_by');
        });
    }
};
