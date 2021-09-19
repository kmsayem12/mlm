

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Favicon icon -->

        <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico') }}" type="image/x-icon">

        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/bootstrap/css/bootstrap.min.css') }}">

        <!-- waves.css -->
        <link rel="stylesheet" href="{{ asset('backend/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
        
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/icon/themify-icons/themify-icons.css') }}">
        <!-- font-awesome-n -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/font-awesome.min.css') }}">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                        <form method="POST" action="{{ route('admin.login') }}" class="md-float-material">
                        <!-- form-material -->
                            @csrf
                            <div class="text-center">
                                <img src="{{ asset('backend/assets/images/logo.png') }}" alt="logo.png">
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Sign In</h3>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">{{ __('E-Mail Address') }}</label>
                                            <input type="text" name="email" class="form-control form-control-round @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                        <input type="password" name="password" class="form-control form-control-round @error('password') is-invalid @enderror" id="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade form-check">
                                                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                            </div>
                                            
                                            @if (Route::has('password.request'))
                                                <div class="forgot-phone text-right f-right">
                                                    <a class="text-right f-w-600" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">{{ __('Login') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
   
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- waves js -->
    <script src="{{ asset('backend/assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('backend/assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/assets/js/common-pages.js') }}"></script>
</body>

</html>
