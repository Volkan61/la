<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('termins', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('termins', function(Blueprint $table) {
			$table->foreign('friseur_id')->references('id')->on('friseurs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});


	}

	public function down()
	{
		Schema::table('termins', function(Blueprint $table) {
			$table->dropForeign('termins_user_id_foreign');
		});
		Schema::table('termins', function(Blueprint $table) {
			$table->dropForeign('termins_friseur_id_foreign');
		});
	}
}