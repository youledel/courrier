<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courriers', function (Blueprint $table) {
            $table->id();
            $table->text('fichier_name');
            $table->date('date_recep');
            $table->date('date_envoi');
            $table->dateTime('heure', $precision = 0);
            $table->text('objet');
            $table->string('mot_cles', 100);
            $table->text('reference');
            $table->boolean('pour_action');
            $table->boolean('pour_info');
            $table->text('reponse');
            $table->string('type');
            $table->string('evaluation_info');
            $table->string('credebilte_source');
            $table->string('source');
            $table->text('info_recuperee');
            $table->text('info_disponible');
            $table->integer('progress');
            $table->text('status');











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
        Schema::dropIfExists('courriers');
    }
}
