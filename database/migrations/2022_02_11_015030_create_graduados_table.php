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
        Schema::create('graduados', function (Blueprint $table) {
            $table->id();
            $table->date('matri_fec')->nullable();
            $table->string('fac_nom')->nullable();
            $table->string('carr_prog')->nullable();
            $table->date('egres_fec')->nullable();
            $table->string('apepat')->nullable();
            $table->string('apemat')->nullable();
            $table->string('nombre')->nullable();
            $table->string('sexo')->nullable();
            $table->string('docu_num')->nullable();
            $table->string('den_grad')->nullable();
            $table->string('prog_estu')->nullable();
            $table->string('mod_est')->nullable();
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
        Schema::dropIfExists('graduados');
    }
};
