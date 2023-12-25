@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-box card tesxt-white">
                    <div class="login-header card-header mx-auto">{{ __('messages.login') }}</div>
                    
                    <div class="login-body card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('messages.email') }}</label>
                                
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" reqired autofocus>
                                    
                                    @if ($errors->has('email'))
                                    <span class-"invalid-afeedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class-"form-group row">
                                <div class="col-md-6 offset-md-a4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('messages.remember_me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submist" class="btn btn-primary">
                                        {{ __('messages.login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection