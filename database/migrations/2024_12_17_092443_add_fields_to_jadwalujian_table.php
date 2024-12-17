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
        Schema::table('jadwalujian', function (Blueprint $table) {
            $table->date('tanggalujian')->nullable();
            $table->string('jammulai', 10)->nullable();
            $table->string('namamatakuliah', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('jadwalujian', function (Blueprint $table) {
            $table->dropColumn(['tanggalujian', 'jammulai', 'namamatakuliah']);
        });
    }
};
