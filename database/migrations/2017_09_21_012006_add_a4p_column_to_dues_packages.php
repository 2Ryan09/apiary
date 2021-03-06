<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddA4PColumnToDuesPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dues_packages', function (Blueprint $table) {
            $table->boolean('available_for_purchase')->after('cost')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dues_packages', function (Blueprint $table) {
            $table->dropColumn('available_for_purchase');
        });
    }
}
