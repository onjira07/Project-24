<!doctype html>
<html lang="en">
  <head>
  	<title>Forgot Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Forgot Password?</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
    		      		</div>
		      		</div>
						<form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-user"></span></div>
                                    <input class="form-control rounded-left" placeholder="email" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="email">
                                </div>
								<div class="w-100 d-flex align-items-center justify-content-center">
		            	<button type="submit" class="btn btn-primary rounded submit" style="width: 500px;">Send Email</button>
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

