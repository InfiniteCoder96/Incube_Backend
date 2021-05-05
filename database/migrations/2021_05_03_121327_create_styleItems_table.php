<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStyleItemsTable extends Migration {

	public function up()
	{
		Schema::create('styleItems', function(Blueprint $table) {
			$table->integer('styleID')->unsigned();
			$table->integer('itemID')->unsigned();
			$table->double('consumption',8,1);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('styleItems');
	}
}