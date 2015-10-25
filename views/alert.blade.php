@if ( Session::get('alert') )
	
	<div class="alert alert-{{ Session::get('alert.class') }} alert-header alert-bg">
		{!! Session::get('alert.message') !!}
	</div> 

	{{ Alert::expire() }}

@endif