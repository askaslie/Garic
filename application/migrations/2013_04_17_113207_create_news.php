<?php

class Create_News {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'news', function( $table ) {
            $table->increments('id');
            $table->text('text');
            $table->integer('author_id');
            $table->timestamps();
        });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('users');
	}

}