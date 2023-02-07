<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
@include('style')
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<div class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
					<div class="row">

                        @if (session()->has('error'))
                        <div class="alert alert-danger sm" role="alert">
                            <h4 class="alert-heading">{{session()->get('error')}}
                            </h4>
                            <p></p>
                            <p class="mb-0"></p>
                          </div>
                        @endif

					<div class="col">
						<select class="custom-select form-control mb-4">
                            <option selected>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="Agent">Agent</option>
                        </select>
						</div>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" type="email" name="username" placeholder="Username"  autofocus>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

                    <div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        {{ __('Login') }}
                    </button>
					</div>

					<div class="text-center p-t-90">
                        @if (Route::has('password.request'))
						<a class="txt1" href="{{ route('password.request') }}">
							{{ __('Forgot Your Password?') }}
						</a>
                        @endif
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	@include('js')

</body>
</html>
