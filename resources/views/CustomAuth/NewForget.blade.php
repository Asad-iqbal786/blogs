<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Recoverpw | Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary">
                                <div class="text-primary text-center p-4">
                                    <h5 class="text-white font-size-20 p-2">Reset Password</h5>
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="assets/images/logo-sm.png" height="24" alt="logo">
                                    </a>
                                </div>
                            </div>
    
                            <div class="card-body p-4">
                                
                                <div class="p-3">

                                    <div class="alert alert-success mt-5" role="alert">
                                        Enter your Email and instructions will be sent to you!
                                    </div>
                                    
                                    <form method="POST" class="form-horizontal mt-4" action="{{ route('password.update') }}">
                                            @csrf
                                            {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
    
                                        <div class="form-group">
                                            <label for="useremail">Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                
                                        <div class="form-group row  mb-0">
                                            <div class="col-12 text-right">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                            </div>
                                        </div>
    
                                    </form>
    
                                </div>
                            </div>
    
                        </div>
    
                        <div class="mt-5 text-center">
                            <p>Remember It ? <a href="" class="font-weight-medium text-primary"> Sign In here </a> </p>
                            <p class="mb-0">?? <script>document.write(new Date().getFullYear())</script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>
