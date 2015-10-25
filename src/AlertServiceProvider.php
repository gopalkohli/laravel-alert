<?php

	namespace Xpromx\Alert;

	use Illuminate\Support\ServiceProvider;

	class AlertServiceProvider extends ServiceProvider
	{

		public function register()
		{
			$this->app->bind('alert', function($app){
				return new Alert;
			});
		}

		public function boot()
		{
			// loading the routes file
			//require __DIR__ . '/Http/routes.php';

			// define the path for the view files
			$this->loadViewsFrom( __DIR__ .'/../views', 'alert');

			// define the files which are going to be published
			/*$this->publishes([
				__DIR__ . '/../migrations/2015_10_25_000000_create_users_table.php' => base_path('database/migrations/2015_10_25_000000_create_users_table.php')
			]);
			*/
		}
	}

?>