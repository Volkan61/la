<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTerminsTable extends Migration {

	public function up()
	{
		Schema::create('termins', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->integer('friseur_id')->unsigned();
		});


	}

	public function down()
	{

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('termins');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');


    }
}