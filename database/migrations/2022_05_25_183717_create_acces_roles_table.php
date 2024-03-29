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
        Schema::create('acces_role', function (Blueprint $table) {
            $table->primary(array('role_id', 'acces_id'));
            $table->timestamps();
            $table->foreignId('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete("cascade");

            $table->foreignId('acces_id')->unsigned();
            $table->foreign('acces_id')->references('id')->on('acces')->onDelete("cascade");
        });
        $data = [
            [ 'role_id' => 1,'acces_id' => 1 ],
            [ 'role_id' => 2,'acces_id' => 3 ],
            [ 'role_id' => 2,'acces_id' => 15 ],
            [ 'role_id' => 2,'acces_id' => 17 ],
            [ 'role_id' => 2,'acces_id' => 14 ],
            [ 'role_id' => 3,'acces_id' => 8 ],
            [ 'role_id' => 3,'acces_id' => 5 ],
            [ 'role_id' => 3,'acces_id' => 14 ],
            [ 'role_id' => 3,'acces_id' => 15 ],
            [ 'role_id' => 3,'acces_id' => 17 ],
            [ 'role_id' => 4,'acces_id' => 5 ],
            [ 'role_id' => 4,'acces_id' => 14 ],
            [ 'role_id' => 4,'acces_id' => 15 ],
            [ 'role_id' => 4,'acces_id' => 17 ],
          
         ];

        DB::table('acces_role')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acces_roles');
    }
};
