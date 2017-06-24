<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	public function up()
	{
		Schema::create('locations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('street');
			$table->string('city', 50);
			$table->string('state', 2);
			$table->string('zip', 12);
			$table->string('phone', 30)->nullable();
			$table->float('latitude', 10,6);
			$table->float('longitude', 10,6);
		});


        $circle_radius = 3959;
        $max_distance = 20;
        $lat = 49.872825;
        $lng = 8.651193;

        $candidates = DB::select(
            'SELECT * FROM
                    (SELECT id, name, street, phone, latitude, longitude, (' . $circle_radius . ' * acos(cos(radians(' . $lat . ')) * cos(radians(latitude)) *
                    cos(radians(longitude) - radians(' . $lng . ')) +
                    sin(radians(' . $lat . ')) * sin(radians(latitude))))
                    AS distance
                    FROM locations) AS distances
                WHERE distance < ' . $max_distance . '
                ORDER BY distance;
            ');

        echo var_dump($candidates);
	}

	public function down()
	{
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('locations');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}