<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('hotel_bookings', function (Blueprint $table) {
            $table->renameColumn('checkin-at', 'checkin_at');
            $table->renameColumn('checkout-at', 'checkout_at');
        });
    }

    public function down()
    {
        Schema::table('hotel_bookings', function (Blueprint $table) {
            $table->renameColumn('checkin_at', 'checkin-at');
            $table->renameColumn('checkout_at', 'checkout-at');
        });
    }
};
