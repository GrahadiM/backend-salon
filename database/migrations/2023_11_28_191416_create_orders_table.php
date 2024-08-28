<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('users')->onDelete('restrict');
            $table->string('address')->nullable();
            $table->string('tf')->nullable();
            $table->string('code_order')->nullable();
            $table->decimal('total_price', 10, 2)->default(0);
            $table->string('note')->nullable();
            $table->string('status', 100)->default('UNPAID')->comment('UNPAID, PAID, SUCCESS', 'CANCEL');
            $table->enum('payment_status', ['1', '2', '3', '4'])->comment('1=UNPAID, 2=FULLY PAID, 3=EXPIRED, 4=DP PAID')->default(1);
            $table->string('snap_token', 36)->nullable();
            $table->string('link_pembayaran')->nullable();
            $table->decimal('dp_price', 10, 2)->nullable();
            $table->timestamp('date_start')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
