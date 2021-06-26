@extends('layouts.auth.main')

@section('body')

<div class="auth-form-light text-left p-5">
  
    <h4>Do u want to register!.</h4>
    <h6 class="font-weight-light">Get start now.</h6>


                        <form method="POST"  class="pt-3" action="{{ route('login') }}">
                            @csrf
                         
                            
                          <div class="form-group">

                            <input   placeholder="Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                         </div>
                          
                          <div class="form-group">
                            <input  placeholder="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                        
                        
                        </div>

                        



                          <div class="mb-4">
                            <div class="form-check">

                                {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> --}}
{{-- 
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label> --}}



                              <label class="form-check-label text-muted"  for="remember">
                                <input type="checkbox" class="form-check-input">
                                Remember me
                              <i class="input-helper"></i>
                            </label>
                            </div>
                          </div>
                          <div class="mt-3">
                            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                          </div>
                          <div class="text-center mt-4 font-weight-light">
                            Dont have an account! <a href="{{ url('register') }}" class="text-primary">Register now</a>
                          </div>
                        </form>
               
</div>

@endsection



