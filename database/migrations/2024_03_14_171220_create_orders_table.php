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
        Schema::create('orders', function (Blueprint $table) {
            $table->char('id');
            $table->char('customer_id');
            $table->string('order_date');
            $table->string('order_status');
            $table->integer('total_product');
            $table->integer('sub_total');
            $table->integer('var');
            $table->integer('total');
            $table->char('invoice_no');
            $table->string('payment_type');
            $table->integer('pay');
            $table->integer('due');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
