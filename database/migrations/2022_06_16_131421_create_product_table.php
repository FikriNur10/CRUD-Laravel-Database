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
        Schema::create('product', function (Blueprint $table) {

            $table->char('code_product',10)->primary()->notnull();
            $table->string('name_product');
            $table->string('category_product');
            $table->bigInteger('price_product'); // bigInteger untuk angka yang luar kurang dari 10 digit
            $table->string('photo_product');
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
        Schema::dropIfExists('product');
    }
};
