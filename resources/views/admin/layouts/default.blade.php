<!DOCTYPE html>
<html lang="en">

@include('admin.includes.header')

<body>
	@include('admin.includes.topMenu')

	<div class="row">
		<div class="col-md-4">
			@include('admin.includes.sideBar')
		</div>
		<div class="col-md-8">
			@yield('content')
		</div>
	</div>
	
	@include('admin.includes.footer')
</body>

</html>