@extends('layouts.app')
@section('title', '首页')

@section('content')
<body style="background:url('/images/splash.jpg');">
<div class="offset-lg col-md-12 pt-5">
  <div class="row">
    <div class="col-xl-6">
    </div>
    <div class="col-xs-12 col-xl-6">
      <div class="jumbotron">
        <h1 style="text-align:center">METAPHYSICS CONSULTANCY</h1>
        <h4 style="text-align:center">
            {{ __('home.free_fengshui') }}
        </h4>
        @guest  
        <p style="text-align:center">
            <a class="btn btn-lg btn-success" href="{{ route('register') }}" role="button">{{ __('home.register') }}</a>
        </p>
        <p style="text-align:center">
            {{ __('home.have_account') }} <a href="{{ route('login') }}" >{{ __('home.login') }}</a>
        </p>
        @else
        <p style="text-align:center">
            <a class="btn btn-lg btn-success" href="{{ route('users.show', Auth::id()) }}" role="button">{{ __('home.consult_now') }}</a>
        </p>
        @endguest
      </div>   
    </div>
  </div>
</body>
@stop