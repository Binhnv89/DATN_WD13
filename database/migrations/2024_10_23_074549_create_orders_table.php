<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code')->unique();
            $table->foreignIdFor(User::class)->constrained();
            $table->date('date_order');
            $table->string('nguoi_nhan');
            $table->string('email');
            $table->string('number_phone');
            $table->string('address');
            $table->string('ghi_chu')->nullable();
            $table->foreignId('status_donhang_id')->constrained('status_donhangs');
            $table->enum('method', ['COD', 'credit_card', 'paypal', 'momo'])->default('COD');
            $table->decimal('subtotal', 15, 2);
            $table->decimal('discount', 15, 2)->default(0);
            $table->decimal('shipping_fee', 15, 2)->default(0);
            $table->decimal('total_price', 15, 2);
            $table->enum('payment_status', ['pending', 'processing', 'paid', 'failed', 'refunded'])->default('pending');
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
