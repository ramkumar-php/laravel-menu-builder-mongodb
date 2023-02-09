<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddRoleIdToMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table(config('menu.table_prefix').config('menu.table_name_items'), function ($table): void {
            $table->uuid('role_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table(config('menu.table_prefix').config('menu.table_name_items'), function ($table): void {
            $table->dropColumn('role_id');
        });
    }
}
