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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('姓名');
            $table->string('email')->unique('電子信箱');
            $table->string('member_number')->unique('會員編號');
            $table->string('address')->comment('地址');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('account_number')->comment('帳號');
            $table->string('password')->comment('密碼');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
