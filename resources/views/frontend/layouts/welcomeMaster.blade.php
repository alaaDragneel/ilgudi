<!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js is-ie"><![endif]-->
<!--[if gt IE 8]>
<!-->
<html class=no-js><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="description" content="BlackTie Free Bootstrap Theme">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>@yield('title', 'Ilgudi.com')</title>
		{!! Html::style('src/frontend/global/css/font-awesome.min.css') !!}
		{{-- google fonts --}}
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

		{!! Html::style('src/frontend/welcomeFiles/css/main.css') !!}
		<!--[if lte IE 8]>
		{!! Html::style('src/frontend/welcomeFiles/css/ie.css') !!}
		<![endif]-->
		@yield('styles')
	</head>
	<body>
		@yield('content')
		<div class="footer text-center">
			<p class="fmenu">
				<a href="{{ route('welcome') }}">HOME</a>
			</p>
		</div>
		{{-- {!! Html::style('src/frontend/usersFiles/css/paper-dashboard.css') !!} --}}
		{!! Html::style('src/frontend/usersFiles/css/themify-icons.css') !!}
		{!! Html::script('src/frontend/welcomeFiles/js/modernizr.js') !!}
		{!! Html::script('src/frontend/welcomeFiles/js/respond.min.js') !!}
		{!! Html::script('src/frontend/global/js/jquery.min.js') !!} {{-- found it int the global folder --}}
		{!! Html::script('src/frontend/global/js/bootstrap.js') !!} {{-- found it int the global folder --}}
		<script src="{{asset('src/frontend/global/js/jquery.nicescroll.min.js')}}"></script>
		{!! Html::script('src/frontend/welcomeFiles/js/dropdown.js') !!}
		{!! Html::script('src/frontend/welcomeFiles/js/main.js') !!}
		<!-- //-end- concat_js -->
		@yield('scripts')
	</body>
</html>
