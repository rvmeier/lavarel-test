<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('archivos', function(Blueprint $table)
		{
			$table->increments('id');
			// Campos
			$table->string('nombre')->nullable();
			$table->text('descripcion')->nullable();
			$table->date('fecha')->nullable();

			$table->timestamps();
			// soft delete
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('archivos');
	}

}
