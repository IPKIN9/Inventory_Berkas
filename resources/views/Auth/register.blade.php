<!DOCTYPE html>
<html lang="en">

<head>

	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">




</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<form class="md-float-material form-material" method="POST" action="{{route('register.insert')}}">
						@csrf
						<div class="card-body">
							<img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="img-fluid mb-4">
							<h4 class="mb-3 f-w-400">Register</h4>
							<div class="form-group mb-3">
								<label class="floating-label" for="Username">name</label>
								<input type="text" class="form-control" name="name" id="name" placeholder=""
									required="">
								@error('name')
								<p class="text-danger mt-2">{{ $message }}</p>
								@enderror
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="Email">username</label>
								<input type="text" class="form-control" name="username" id="username" placeholder=""
									required="">
								@error('username')
								<p class="text-danger mt-2">{{ $message }}</p>
								@enderror
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder=""
									required="">
								@error('password')
								<p class="text-danger mt-2">{{ $message }}</p>
								@enderror
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">konfirmasi Password</label>
								<input type="password" class="form-control" name="password_confirmation" id="password" placeholder=""
									required="">
								@error('confirmed')
								<p class="text-danger mt-2">{{ $message }}</p>
								@enderror
							</div>
							<button class="btn btn-primary btn-block mb-4">register</button>
							<p class="mb-2">Already have an account? <a href="{{route('login')}}"
									class="f-w-400">login</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ripple.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>



</body>

</html>