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
        Schema::create('ecoles', function (Blueprint $table) {
            $table->id();
            $table->string('ecole_name');
            $table->string('ecole_code');
            $table->string('ecole_logo');
            $table->string('ecole_telephone')->unique();
            $table->string('ecole_email')->unique();
            $table->string('ecole_ville');
            $table->string('ecole_adresse');
            $table->text('ecole_note');
            $table->integer('ecole_status')->default(0);
            $table->string('ecole_responsable');
            $table->string('ecole_responsable_email');
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
        Schema::dropIfExists('ecoles');
    }
};
