<?php

class Main_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	public function action_index()
	{
        $news =  News::find(1);
        $news->get_times();

        $params = array( 'news'=> $news );
		return View::make( 'main', $params );
	}

    public function action_serv()
    {
        Schema::drop('news');
        Schema::create( 'news', function( $table ) {
            $table->increments('id');
            $table->text('text');
            $table->integer('author_id');
            $table->string('header');
            $table->timestamps();
        });

        $news = new News();
        $news->text = '<br>flsajdfadkjffjaf<adfasdfa>';
        $news->save();
    }

}