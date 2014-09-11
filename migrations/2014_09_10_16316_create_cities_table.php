<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function($table)
		{
		    $table->increments('id');
		    $table->string('name', 200);
		    $table->integer('zip');
		    $table->string('province', 200);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::dropIfExists('cities');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
