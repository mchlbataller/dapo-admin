<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('global-css/bootstrap.css') }}">
    <link rel="stylesheet" href="css/login.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="global-css/fonts.css">
    <title>DAPO | Login</title>
</head>
<body>
    <div class="row body">
        

        <div class="col">
            <div class="container login">
                <h2 class="sign-in">Register to <span class="site">dapo-control</span></h2>

                <form method="POST" action="{{ route('registerSubmit') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" name="name" id="name-input" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <input type="text" name="username" id="username-input" placeholder="Username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <input type="password" name="password" id="password-input" placeholder="Password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>


                        <button type="submit" class="btn btn-primary log-in-btn">Register</button>
                    </form>
    
                <p class="footer-credits">Copyright ©2020 <br>Login Page Design by Michael C. Bataller. All rights reserved.</p>
            </div>


        </div>
        <div class="col-sm-7" id="particles-js">
            <p class="pre-header">Welcome to</p>
            <h1 class="title-header">DAPO Control</h1>

            <p class="desc"> Register an account for DAPO Administrator Page.  
            </p>

        </div>
    </div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>

</body>
</html>
