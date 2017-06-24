<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFriseursTable extends Migration {

	public function up()
	{
		Schema::create('friseurs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('vorname');
		});
	}

	public function down()
	{

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('friseurs');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}