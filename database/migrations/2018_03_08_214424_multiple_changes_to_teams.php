<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MultipleChangesToTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->string('slug')->after('name')->nullable();
            $table->boolean('attendable')->after('name')->default(false);
            $table->boolean('hidden')->after('name')->default(false);
            $table->dropColumn('founding_semester');
            $table->char('founding_year', 4)->after('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('attendable');
            $table->dropColumn('hidden');
            $table->dropColumn('founding_year');
            $table->char('founding_semester', 4)->after('name');
        });
    }
}
