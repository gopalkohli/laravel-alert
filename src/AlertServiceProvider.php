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
			
			// define the path for the view files
			$this->loadViewsFrom( __DIR__ .'/../views', 'alert');

		}
	}

?>