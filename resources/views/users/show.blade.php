@extends('layouts.app')

@section('title', $user->name . ' 的个人中心')

@section('content')

<div class="row">
  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
    <div class="card">
      <img class="card-img-top" src="{{ $user->avatar }}" alt="{{ $user->name }}">
      <div class="card-body">
      <div class="card-body">
        <h5><strong>{{ __('edit_info.introduction') }}</strong></h5>
        <p>{{ date('Y-m-d h:i A', strtotime($user->date_of_birth)) }}</p>
        <p>{{ $user->introduction }}</p>
        <hr>
        <h5><strong>{{ __('info.registered_at') }}</strong></h5>
        <p>{{ $user->created_at->diffForHumans() }}</p>
      </div>
    </div>

  

    </div>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-6">
          <h5>{{ __('edit_info.username') }} :</h5>
          </div>
          <div class="col-sm-6">
          <h1 class="mb-0" style="font-size:22px;"><small>{{ $user->name }}</small></h1>
          </div>
          <div class="col-sm-6">
          <h5>{{ __('info.email') }} :</h5>
          </div>
          <div class="col-sm-6">
          <h1 class="mb-0" style="font-size:22px;"><small>{{ $user->email }}</small></h1>
          </div>
        </div>
      </div>
    </div>
    <hr>
    {{-- 用户发布的内容 --}}
    <div class="row">
      <div class="col-sm-4">
        <a  class="btn btn-lg btn-success" href="{{ route('bazi', Auth::id()) }}" role="button">{{ __('info.check_report') }}</a>
      </div>
    </div>
  </div>
    
</div>
@stop