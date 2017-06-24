<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePopulation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('locations')->insert(
            array(
                'name' => 'Soner Berber',
                'street' => 'Rheinstraße 12',
                'city' => 'Mannheim',
                'state' => 'DE',
                'zip' => '68183',
                'phone' => '0122873823',
                'latitude' => '49.487459',
                'longitude' => '8.466039'
            )
        );
        DB::table('locations')->insert(
            array(
                'name' => 'Soner Berber "',
                'street' => 'Rheinstraße 12',
                'city' => 'Köln',
                'state' => 'DE',
                'zip' => '68183',
                'phone' => '0122873823',
                'latitude' => '50.937531',
                'longitude' => '6.960279'
            )
        );



        // Insert some stuff
        DB::table('friseurs')->insert(
            array(
                'name' => 'Soner',
                'vorname' => 'Kaya'
            )
        );




        // Insert some stuff
        DB::table('users')->insert(
            array(
                'name' => 'Volkan',
                'email' => 'volkanhmo@gmail.com',
                'password' => 'test123'
            )
        );
        // Insert some stuff
        DB::table('users')->insert(
            array(
                'name' => 'Haluk',
                'email' => 'haluk189@gmail.com',
                'password' => 'gi0veww7'
            )
        );        // Insert some stuff
        DB::table('users')->insert(
            array(
                'name' => 'Arzu',
                'email' => 'arzuhaci@hotmail.com',
                'password' => 'arzumm61'
            )
        );



        // Insert some stuff
        DB::table('termins')->insert(
            array(
                'user_id' => '1',
                'friseur_id' => '1',

            )
        );
        DB::table('termins')->insert(
            array(
                'user_id' => '2',
                'friseur_id' => '1',

            )
        );



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
