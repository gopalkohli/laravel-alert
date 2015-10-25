<?php

namespace Xpromx\Alert;

use Session;

class Alert
{

	public function success( $message )
	{
		Alert::register( $message, 'success' );
	}

	public function danger( $message )
	{
		Alert::register( $message, 'danger' );
	}

	public function warning( $message )
	{
		Alert::register( $message, 'warning' );
	}

	public function info( $message )
	{
		Alert::register( $message, 'info' );
	}

	public function register( $message, $class='info' )
	{
		session(['alert.class' => $class, 
				 'alert.message' => $message]);
	}

	public function expire()
	{
		session()->forget('alert');
	}

	public function render()
	{
		return view('alert::alert');
	}
	
}

