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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('nom_role');
            $table->timestamps();
        });

        $data = [
            [ 'nom_role' => 'administrateur'],
            [ 'nom_role' => 'vice president'],
            [ 'nom_role' => 'divisionnaire'],
            [ 'nom_role' => 'employé'],
          
         ];

        DB::table('roles')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
