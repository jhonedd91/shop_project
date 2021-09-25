<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name",100)->nullable();
            $table->decimal("price")->nullable();
            $table->decimal("cost")->nullable();
            $table->foreignId('brand_id')->nullable()->onUpdate('cascade')
            ->onDelete('cascade')->constrained('brands');
            $table->foreignId('category_id')->nullable()->onUpdate('cascade')
            ->onDelete('cascade')->constrained('categories');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('products');
        Schema::enableForeignKeyConstraints();
    }
}
