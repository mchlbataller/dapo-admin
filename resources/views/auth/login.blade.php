<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('global-css/bootstrap.css') }}">
    <link rel="stylesheet" href="css/login.css?v=<?php echo rand(); ?>">
    <link rel="stylesheet" href="global-css/fonts.css">
    <title>Log In to assess.io</title>
</head>
<body>
    <div class="row body">
        <div class="col-sm-7" id="particles-js">
            <p class="pre-header">Welcome to</p>
            <h1 class="title-header">dapo Control Page</h1>

            <p class="desc"> Only authorized users are allowed beyond this point.  
            </p>

        </div>

        <div class="col">
            <div class="container login">
                <h2 class="sign-in">Sign in to <span class="site">dapo-admin</span></h2>

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="username" id="username-input" placeholder="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    
                    <div class="form-group">
                        <input type="password" name="password" id="pw" placeholder="Password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
    

                    <button type="submit" class="btn btn-primary log-in-btn">Log In</button>

                </form>
    
                <p class="footer-credits">Copyright ©2020 <br>Login Page Design by Michael C. Bataller. All rights reserved.</p>
            </div>


        </div>
    </div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>

</body>
</html>
