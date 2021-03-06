@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('home.register') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('register.name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('login.email') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('login.password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('register.confirm_password') }}</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('register.sex') }}</label>

              <div class="col-md-6">
                <select class="form-control" name="sex">
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>

                @if ($errors->has('sex'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('sex') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('register.date_of_birth') }}</label>

              <div class="col-md-6">
                <input id="dob" type="datetime-local" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" 
                       name="dob" min="{{ (int)date('Y') - 100 }}-01-01T00:00" max="{{ date('Y-m-d') }}T00:00" value="{{  old('dob') }}">

                @if ($errors->has('dob'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('dob') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="captcha" class="col-md-4 col-form-label text-md-right">{{ __('register.captcha') }}</label>

              <div class="col-md-6">
                <input id="captcha" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" name="captcha" required>

                <img class="thumbnail captcha mt-3 mb-2" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">

                @if ($errors->has('captcha'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('captcha') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('home.register') }}
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