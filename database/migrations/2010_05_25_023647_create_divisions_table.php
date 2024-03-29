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
        Schema::create('divisions', function (Blueprint $table) {
            $table->id();
            $table->String('nomdep');
            $table->Integer('stat')->default(1);
            $table->timestamps();
        });



        $data = [
            [ 'nomdep' => 'PED',],
            [ 'nomdep' => 'DP',],
            [ 'nomdep' => 'AST',],
            [ 'nomdep' => 'EXP',],
            [ 'nomdep' => 'FOR',],
         ];

        DB::table('divisions')->insert($data);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisions');
    }
};
