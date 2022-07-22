<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('payments', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('transaction_id')->nullable();
        //     $table->string('authorizing_merchant_id')->nullable();
        //     $table->decimal('amount')->nullable();
        //     $table->string('message')->nullable();
        //     $table->string('auth_code')->nullable();
        //     $table->string('order_number')->nullable();
        //     $table->string('type')->nullable();
        //     $table->date('created')->nullable();
        //     $table->string('payment_method')->nullable();
        //     $table->boolean('is_security_deposit')->nullable();
        //     $table->foreignId('user_id')->references('id')->on('users');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
