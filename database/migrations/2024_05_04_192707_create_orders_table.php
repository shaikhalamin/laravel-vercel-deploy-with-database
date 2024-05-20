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
            $table->id();

            // $table->integer('promotion_coupon_id')->nullable();
            // $table->float('items_total');
            // $table->float('adjustments_total');
            // $table->float('total');
            // $table->string('currency_code');
            // $table->string('shipping_status');
            // $table->string('customer_ip');

            $table->date('order_date');
            $table->string('status');
            $table->string('payment_status');

            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();


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
