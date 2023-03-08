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
        Schema::table('data_kategories', function (Blueprint $table) {
            $table->unsignedBigInteger('data_bappeda_id');
            $table->foreign('data_bappeda_id')->references('id')->on('data_bappedas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_kategories', function (Blueprint $table) {
            $table->dropForeign(['data_bappeda_id']);
        });
    }
};
