<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsWpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(config('menu.table_prefix').config('menu.table_name_items'), function (Blueprint $table): void {
            $table->uuid('id');
            $table->string('label');
            $table->string('link');
            $table->uuid('parent_id')->default(0);
            $table->integer('sort')->default(0);
            $table->string('class')->nullable();
            $table->unsignedBigInteger('menu_id');
            $table->integer('depth')->default(0);
            $table->timestamps();

            $table->foreign('menu_id')->references('_id')
                ->on(config('menu.table_prefix').config('menu.table_name_menus'))
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(config('menu.table_prefix').config('menu.table_name_items'));
    }
}
