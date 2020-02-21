<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	@yield('styles')

	@include('partials.login-nav')
</head>
<body>

	<div class="container">
	@yield('content')
	</div>
	
	@include('partials.footer')

	@yield('scripts')

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>