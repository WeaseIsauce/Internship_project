@extends('layouts.app')

@section('content')




<div class="container" style="margin-top: -1rem">

    
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9 ">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                       
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="https://cdn.discordapp.com/attachments/711757209889144865/1115077226703101972/ps4.jpg" alt="ps4">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="https://cdn.discordapp.com/attachments/711757209889144865/1115309768756699166/analog2.png" alt="logo" style="width:auto; height:100px">
                                        <br><br>
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                   
                                    <form method="POST" action="{{ route('login') }}" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <div class="form-outline mb-4">
                                            <div>
                                                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" aria-describedby="emailHelp"
                                                 placeholder="Enter Email Address..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                 @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            </div>

                                        <div class="form-group">
                                            <div >
                                                <input id="password" type="password" placeholder="Password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            
                                        </div>

                                          
                                        </div>
                                        <div class="form-group">

                                        

                                            <div class="custom-control custom-checkbox small">

                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="custom-control-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>

                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Login') }}
                                </button>

                                       
                                    
                                    <hr>
                                    <div class="text-center">

                                    @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif

                                        
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>





@endsection
