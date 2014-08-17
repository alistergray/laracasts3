<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Tasks', function(Blueprint $table)
		{
			//
			$table->increments('id');
			$table->string('title');
			$table->text('body');
			$table->integer('user_id');
			$table->boolean('complete');
			$table->timestamps();
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Tasks');
	}

}
