<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Reset Password</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
							<div class="w-100">
								<p class="social-media d-flex justify-content-end">
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
								</p>
							</div>
		      		</div>
						<form method="POST" action="{{ route('password.store') }}">
        					@csrf
                            <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input class="form-control rounded-left" placeholder="Email" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="email">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input class="form-control rounded-left" placeholder="Password" id="password" type="password" name="password" :value="old('password')" required autofocus autocomplete="password">
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
	            </div>
                <div class="form-group">
                     <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                <input id="password_confirmation" class="form-control rounded-left" placeholder="password confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
	            <div class="form-group d-flex align-items-center">
								<div class="w-100 d-flex justify-content-end">
		            	<button type="submit" class="btn btn-primary rounded submit" herf="{{ route ('login')}}">Reset</button>
	            	</div>
	            </div>

	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
