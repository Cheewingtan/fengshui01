@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-8 offset-md-2">

    <div class="card">
      <div class="card-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> {{ __('edit_info.edit_info') }}
        </h4>
      </div>

      <div class="card-body">

        <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          @include('shared._error')
          <div class="form-group">
            <label for="name-field">{{ __('edit_info.username') }}</label>
            <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" />
          </div>
          <div class="form-group">
            <label for="email-field">{{ __('login.email') }}</label>
            <input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $user->email) }}" />
          </div>
          <div class="form-group">
              <label for="dob">{{ __('register.date_of_birth') }}</label>
              <input id="dob" type="datetime-local" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" 
                     name="dob" min="{{ (int)date('Y') - 100 }}-01-01T00:00" max="{{ date('Y-m-d') }}T00:00" value="{{  old('dob', $user->date_of_birth) }}">
          </div>
          <div class="form-group">
            <label for="introduction-field">{{ __('edit_info.introduction') }}</label>
            <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
          </div>

          <div class="form-group mb-4">
            <label for="" class="avatar-label">{{ __('edit_info.picture') }}</label>
            <input type="file" name="avatar" class="form-control-file">

            @if($user->avatar)
              <br>
              <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200" />
            @endif
          </div>
          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">{{ __('edit_info.save') }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection