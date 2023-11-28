<!doctype html>
<html lang="en">

<head>
    <title>Login 03</title>
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
                    <h2 class="heading-section">Sign Up</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Sign Up</h3>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a>
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a>
                                </p>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('register') }}" class="signup-form">
                             @csrf
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-user"></span></div>
                                <input class="form-control rounded-left" placeholder="name" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                            </div>
                            

                            <div class="form-group">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-user"></span></div>
                                    <input class="form-control rounded-left" placeholder="username" id="username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username">
                                </div>

                                <div class="form-group">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-user"></span></div>
                                    <input class="form-control rounded-left" placeholder="email" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="email">
                                </div>

                                <div class="form-group">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-lock"></span></div>
                                    <input class="form-control rounded-left" placeholder="phone" id="phone" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone">
                                </div>

                                <div class="form-group">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-lock"></span></div>
                                    <input id="password" class="form-control rounded-left"
                                        placeholder="password"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password">
                                        
                                </div>
                                <div class="form-group">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-lock"></span></div>
                                    <input id="password_confirmation" class="form-control rounded-left"
                                         placeholder="password confirm"
                                         type="password"
                                         name="password_confirmation" 
                                         required autocomplete="new-password">
                                       
                                </div>
                                <div class="form-group d-flex align-items-center">
                                    <div class="w-100">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Save Password
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-100 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary rounded submit" >Sign Up</button>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <div class="w-100 text-center">
                                        <p class="mb-1">Go To
                                            <a href="{{ route('login') }}" class="txt2 bo1">Sign In Now</a>
                                        </p>
                                        <p><a href="{{ route('password.request') }}" class="txt2 bo1 m-1-5">Forgot
                                                Password</a></p>
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